<?php

namespace WebuyShop\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Cart Entity
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="WebuyShop\FrontBundle\Repository\CartRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Cart
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
     * @var integer
     *
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @Groups({"rest", "detail"})
     *
     * @ORM\OneToMany(targetEntity="CartProduct", mappedBy="cart", cascade={"all"})
     * */
    protected $cp;

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

    public function __construct()
    {
        //$this->cp = new ArrayCollection();
        //$this->categories = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getCp() {
        return $this->cp;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return Cart
     */
    public function setUser($user)
    {
        $this->user = $user;
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
