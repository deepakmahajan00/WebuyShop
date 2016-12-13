<?php

namespace WebuyShop\FrontBundle\Service;

use WebuyShop\FrontBundle\Entity\Orders;
use WebuyShop\FrontBundle\Repository\OrderRepository;
use WebuyShop\FrontBundle\Exception\ResourceNotFoundException;

class OrderService extends BaseEntityService
{
    /**
     * OrderService constructor.
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        parent::__construct($orderRepository);
    }

   public function findOneByStatus($criteria) {
        $order = $this->entityRepository->findOneByStatus($criteria['status']);

        if (!$order) {
            return;
        }

        return $order;
    }

    public function findCart($criteria) {
        $order = $this->entityRepository->findCart($criteria['id']);

        if (!$order) {
            return;
        }

        return $order;
    }

    public function findCartItems($array) {
        $order = $this->entityRepository->findCartItems($array['user_id'], $array['status']);

        if (!$order) {
            return;
        }

        return $order;
    }

    public function findOrder($array) {
        $order = $this->entityRepository->findOrder($array['user_id'], $array['status']);

        if (!$order) {
            return;
        }

        return $order;
    }

}