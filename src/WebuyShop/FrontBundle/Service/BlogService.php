<?php

namespace WebuyShop\FrontBundle\Service;

use WebuyShop\FrontBundle\Entity\Blog;
use WebuyShop\FrontBundle\Repository\BlogRepository;
use WebuyShop\FrontBundle\Exception\ResourceNotFoundException;

class BlogService extends BaseEntityService
{
    /**
     * BlogService constructor.
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        parent::__construct($blogRepository);
    }

    public function findByCategory($criteria) {
        $blogs = $this->entityRepository->findByUserCategory($criteria['user'], $criteria['category']);

        if (!$blogs) {
            throw new ResourceNotFoundException("Could not find blog with categoryId '{$criteria['category']}' for userId '{$criteria['user']}'");
        }

        return $blogs;
    }
}