<?php

namespace WebuyShop\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WebuyShop\FrontBundle\Entity\Category;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoriesData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setCategoryName('Games');
        $manager->persist($category);

        $category = new Category();
        $category->setCategoryName('Movies');
        $manager->persist($category);

        $category = new Category();
        $category->setCategoryName('Electronics');
        $manager->persist($category);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}