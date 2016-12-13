<?php

namespace WebuyShop\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WebuyShop\FrontBundle\Entity\Blog;
use WebuyShop\FrontBundle\Entity\Category;
use WebuyShop\FrontBundle\Entity\User;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadBlogData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       /* $blog = new Blog();
        $category = new Category(1);
        $user = new User(1);
        $blog->setTitle('Travel-Bombay');
        $blog->setDescription('Test travel blog to bombay');
        $blog->setCategory((array) $category->getId());
        $blog->setUser($user->getId());
        $manager->persist($blog);

        $blog = new Blog();
        $category = new Category(2);
        $user = new User(1);
        $blog->setTitle('Photograph-NL');
        $blog->setDescription('Photograph blog to NL');
        $blog->setCategory((array) $category->getId());
        $blog->setUser($user->getId());

        $manager->persist($blog);
        $manager->flush();*/
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}