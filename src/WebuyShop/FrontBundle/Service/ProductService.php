<?php

namespace WebuyShop\FrontBundle\Service;

use WebuyShop\FrontBundle\Entity\Product;
use WebuyShop\FrontBundle\Repository\ProductRepository;
use WebuyShop\FrontBundle\Exception\ResourceNotFoundException;

class ProductService extends BaseEntityService
{
    /**
     * ProductService constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        parent::__construct($productRepository);
    }

    public function findByCategory($criteria) {
        $products = $this->entityRepository->findByUserCategory($criteria['category']);

        if (!$products) {
            throw new ResourceNotFoundException("Could not find product with categoryId '{$criteria['category']}'");
        }

        return $products;
    }
}