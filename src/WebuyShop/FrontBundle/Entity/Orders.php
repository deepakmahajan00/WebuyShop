<?php

namespace WebuyShop\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Orders Entity
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="WebuyShop\FrontBundle\Repository\OrderRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Orders
{
    const ORDERED = 1;
    const PROCESS = 2;
    const APPROVED = 3;

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
     * @var integer
     *
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Cart", fetch="EAGER")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    private $cart;

    /**
     * @var integer
     *
     * @Groups({"rest", "detail"})
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     *
     */
    private $status;

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
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return Order
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param string $cart
     * @return Orders
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
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
