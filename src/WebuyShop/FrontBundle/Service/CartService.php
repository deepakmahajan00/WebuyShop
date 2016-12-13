<?php

namespace WebuyShop\FrontBundle\Service;

use WebuyShop\FrontBundle\Entity\Cart;
use WebuyShop\FrontBundle\Repository\CartRepository;
use WebuyShop\FrontBundle\Exception\ResourceNotFoundException;

class CartService extends BaseEntityService
{
    /**
     * CartService constructor.
     * @param CartRepository $cartRepository
     */
    public function __construct(CartRepository $cartRepository)
    {
        parent::__construct($cartRepository);
    }

    public function findCartItems($array) {
        $cart = $this->entityRepository->findCartItems($array['user_id'], $array['status']);

        if (!$cart) {
            return;
        }

        return $cart;
    }
}