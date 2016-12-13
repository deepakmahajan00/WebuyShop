<?php

namespace WebuyShop\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WebuyShop\FrontBundle\Entity\Product;
use WebuyShop\FrontBundle\Entity\Category;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadProductData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $category = new Category(1);
        $product->setTitle('Product-1');
        $product->setDescription('Product-1 description');
        $product->setPrice('100');
        $product->setImage('C:\xampp\htdocs\WebuyShop\web\image');
        $product->setCategory((array) $category->getId());
        $manager->persist($product);

        $product = new Product();
        $category = new Category(2);
        $product->setTitle('Product-2');
        $product->setDescription('Product-2 description');
        $product->setPrice('101');
        $product->setImage('C:\xampp\htdocs\WebuyShop\web\image');
        $product->setCategory((array) $category->getId());
        $manager->persist($product);

        $product = new Product();
        $category = new Category(3);
        $product->setTitle('Product-3');
        $product->setDescription('Product-3 description');
        $product->setPrice('103');
        $product->setImage('C:\xampp\htdocs\WebuyShop\web\image');
        $product->setCategory((array) $category->getId());
        $manager->persist($product);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
}