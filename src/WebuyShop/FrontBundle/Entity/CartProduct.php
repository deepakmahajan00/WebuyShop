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

/** @ORM\Table(name="cart_product")
 * @ORM\Entity()
 * @ORM\Entity(repositoryClass="WebuyShop\FrontBundle\Repository\CartProductRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class CartProduct
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
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="cp")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Product should not be null")
     */
    protected $product;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cp")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Cart should not be null")
     */
    protected $cart;

    public function setProduct($product) {
        $this->product = $product;
        return $this;
    }

    public function getProduct() {
        return $this->product;
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