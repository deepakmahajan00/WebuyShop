<?php

namespace WebuyShop\FrontBundle\Service;

use WebuyShop\FrontBundle\Entity\User;
use WebuyShop\FrontBundle\Repository\UserRepository;
use WebuyShop\FrontBundle\Exception\ResourceNotFoundException;

class UserService extends BaseEntityService
{
    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    /**
     * @param string| $username
     * @return null|User
     * @throws ResourceNotFoundException
     */
    public function findByUsername($username)
    {
        $user = $this->entityRepository->findOneBy(['username' => $username]);
        if (!$user) {
            throw new ResourceNotFoundException("Could not find user by username '{$username}'");
        }

        return $user;
    }
}