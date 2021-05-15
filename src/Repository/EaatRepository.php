<?php

namespace App\Repository;

use App\Entity\Eaat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eaat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eaat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eaat[]    findAll()
 * @method Eaat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EaatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eaat::class);
    }

    // /**
    //  * @return Eaat[] Returns an array of Eaat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eaat
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
