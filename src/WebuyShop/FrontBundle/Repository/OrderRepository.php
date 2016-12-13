<?php

namespace WebuyShop\FrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * Order Repository
 */
class OrderRepository extends BaseEntityRepository implements FilterableRepositoryInterface
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

    public function findOneByStatus($status)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m')
            ->where('m.status = :status')
            ->orderBy('m.createdAt', 'DESC')
            ->setParameter('status', $status);

        return $qb->getQuery()
            ->getResult();
    }

    public function findCart($status)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m.cart_id')
            ->orderBy('m.createdAt', 'DESC')
            ->setParameter('id', $status);

        return $qb->getQuery()
            ->getResult();
    }

    public function findCartItems($userId, $status)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b, cart, cp, product')
            ->innerJoin('b.cart', 'cart')
            ->innerJoin('cart.cp', 'cp')
            ->innerJoin('cp.product', 'product')
            ->where('b.user = :userId')
            ->andWhere('b.status = :status')
            ->setParameter('userId', $userId)
            ->setParameter('status', $status);

        return $qb->getQuery()
            ->getResult();
    }

    public function findOrder($userId, $status)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->where('b.user = :userId')
            ->andWhere('b.status = :status')
            ->setParameter('userId', $userId)
            ->setParameter('status', $status);

        return $qb->getQuery()
            ->getResult();
    }
}
