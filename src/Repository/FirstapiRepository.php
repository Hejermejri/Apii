<?php

namespace App\Repository;

use App\Entity\Firstapi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Firstapi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Firstapi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Firstapi[]    findAll()
 * @method Firstapi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirstapiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Firstapi::class);
    }

    // /**
    //  * @return Firstapi[] Returns an array of Firstapi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Firstapi
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
