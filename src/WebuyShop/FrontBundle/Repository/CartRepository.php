<?php

namespace WebuyShop\FrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * Cart Repository
 */
class CartRepository extends BaseEntityRepository implements FilterableRepositoryInterface
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

    public function findCartItems($id)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->innerJoin('b.po', 'po')
            ->Where('po.id = :id')
            ->orderBy('b.createdAt', 'DESC')
            ->setParameter('id', $id);

        return $qb->getQuery()
            ->getResult();
    }
}
