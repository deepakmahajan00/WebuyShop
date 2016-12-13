<?php

namespace WebuyShop\FrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * Product Repository
 */
class ProductRepository extends BaseEntityRepository implements FilterableRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function findAllWithCriteria(Criteria $criteria)
    {
        return $this->createQueryBuilder('b')
            ->select('b')
            ->addCriteria($criteria)
            ->orderBy("b.createdAt", 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * {@inheritDoc}
     */
    public function count(Criteria $criteria)
    {
        $countCriteria = clone $criteria;
        $countCriteria->setMaxResults(null)->setFirstResult(null);

        return (int) $this->createQueryBuilder('b')
            ->select('count(b)')
            ->addCriteria($countCriteria)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getProductsForUser($userId)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->where('b.user = :user_id')
            ->setParameter('user_id', $userId);

        return $qb->getQuery()
            ->getArrayResult();
    }

    public function findByUserCategory($category)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->innerJoin('b.po', 'po')
            ->Where('po.category = :category_id')
            ->orderBy('b.createdAt', 'DESC')
            ->setParameter('category_id', $category);

        return $qb->getQuery()
            ->getResult();
    }
}
