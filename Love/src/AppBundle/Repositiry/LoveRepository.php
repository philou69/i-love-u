<?php

namespace AppBundle\Repositiry;

/**
 * LoveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LoveRepository extends \Doctrine\ORM\EntityRepository
{
  public function counting()

  {
    $queryBuilder = $this->createQueryBuilder('l');
    $queryBuilder->select($queryBuilder->expr()->count('l'));

    return $queryBuilder->getQuery()->getSingleScalarResult();

  }
}