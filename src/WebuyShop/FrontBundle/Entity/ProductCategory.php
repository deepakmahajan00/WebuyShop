<?php
/**
 * Created by PhpStorm.
 * User: d.mahajan
 * Date: 23/10/16
 * Time: 09:54
 */

namespace WebuyShop\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\Table(name="product_category")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class ProductCategory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups({"rest"})
     *
     * @var integer $id
     */
    protected $id;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Product should not be null")
     */
    protected $product;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="po")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Category should not be null")
     */
    protected $category;

    public function setProduct($product) {
        $this->product = $product;
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getId() {
        return $this->id;
    }
}