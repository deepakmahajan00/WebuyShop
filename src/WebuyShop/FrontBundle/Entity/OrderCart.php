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

/** @ORM\Table(name="order_cart")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class OrderCart
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
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Order should not be null")
     */
    protected $order;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Cart")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Cart should not be null")
     */
    protected $cart;

    public function setOrder($order) {
        $this->order = $order;
        return $this;
    }

    public function getOrder() {
        return $this->order;
    }

    public function setCart($cart) {
        $this->cart = $cart;
        return $this;
    }

    public function getCart() {
        return $this->cart;
    }

    public function getId() {
        return $this->id;
    }
}