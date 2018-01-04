<?php

namespace AppBundle\Repository;

/**
 * VersusRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VersusRepository extends \Doctrine\ORM\EntityRepository
{
    public function findWithSoftNames($soft1, $soft2)
    {

        $qb = $this->createQueryBuilder('s')
            ->where('s.software1 = :soft1')
            ->andWhere('s.software2 = :soft2')
            ->setParameter('soft1', $soft1)
            ->setParameter('soft2', $soft2)
            ->getQuery();
        return $qb->getResult();


    }
}
