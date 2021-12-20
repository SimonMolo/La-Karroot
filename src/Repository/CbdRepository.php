<?php

namespace App\Repository;

use App\Entity\Cbd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cbd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbd[]    findAll()
 * @method Cbd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbd::class);
    }

    // /**
    //  * @return Cbd[] Returns an array of Cbd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cbd
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
