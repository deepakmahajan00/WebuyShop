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

/** @ORM\Table(name="user_product")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class UserProduct
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
     * @ORM\ManyToOne(targetEntity="product", inversedBy="po")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "Product should not be null")
     */
    protected $product;

    /**
     * @Groups({"rest"})
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="po")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull(message = "User should not be null")
     */
    protected $user;

    public function setProduct($product) {
        $this->product = $product;
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }

    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

    public function getUser() {
        return $this->user;
    }

    public function getId() {
        return $this->id;
    }
}