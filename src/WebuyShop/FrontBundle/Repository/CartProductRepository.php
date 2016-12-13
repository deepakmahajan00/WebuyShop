<?php

namespace WebuyShop\FrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * CartProduct Repository
 */
class CartProductRepository extends BaseEntityRepository implements FilterableRepositoryInterface
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


}
