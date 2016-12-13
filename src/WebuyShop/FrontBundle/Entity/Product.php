<?php

namespace WebuyShop\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Product Entity
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="WebuyShop\FrontBundle\Repository\ProductRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Product
{
    /**
     * @var integer
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Title should not be null")
     */
    private $title;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Description should not be null")
     */
    private $description;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="price", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Price should not be null")
     */
    private $price;

    /**
     * @var string
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Image should not be null")
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    protected $updatedAt;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\OneToMany(targetEntity="ProductCategory", mappedBy="product", cascade={"persist"})
     * @Assert\NotNull(message = "Category should not be null")
     * @Assert\NotBlank(message = "Category should not be null")
     * */
    protected $po;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\OneToMany(targetEntity="UserProduct", mappedBy="product", cascade={"persist"})
     * @Assert\NotNull(message = "User should not be null")
     * @Assert\NotBlank(message = "User should not be null")
     * */
    protected $pu;

    /**
     * @Groups({"rest"})
     *
     * @ORM\OneToMany(targetEntity="CartProduct" , mappedBy="product" , cascade={"all"})
     * */
    protected $cp;

    /*
     * @Groups({"rest", "detail"})
     */
    protected $categories;

    public function __construct()
    {
        $this->po = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->pu = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getPo() {
        return $this->po;
    }

    /**
     * @return ArrayCollection
     */
    public function getPu() {
        return $this->pu;
    }

    /**
     * @return ArrayCollection
     */
    public function getCp() {
        return $this->cp;
    }

    // Important
    public function getCategory()
    {
        $categories = new ArrayCollection();

        foreach($this->po as $p)
        {
            $categories[] = $p->getCategory();
        }

        return $categories;
    }
    // Important
    public function setCategory($categories)
    {
        //var_dump($categories);
        foreach($categories as $p)
        {
            $po = new ProductCategory();

            $po->setProduct($this);
            $po->setCategory($p);

            $this->addPo($po);
        }
    }

    public function getProduct()
    {
        return $this;
    }

    public function addPo($productCategory)
    {
        $this->po[] = $productCategory;
    }

    public function removePo($productCategory)
    {
        return $this->po->removeElement($productCategory);
    }

    public function addPu($userProduct)
    {
        $this->pu[] = $userProduct;
    }

    public function removePu($userProduct)
    {
        return $this->pu->removeElement($userProduct);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Blog
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Blog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Blog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $now = new \DateTime();
        $this->setCreatedAt($now);
        $this->setUpdatedAt($now);
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $now = new \DateTime();
        $this->setUpdatedAt($now);
    }
}
