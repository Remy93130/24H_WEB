<?php

namespace App\Repository;

use App\Entity\TestDatabase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestDatabase|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestDatabase|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestDatabase[]    findAll()
 * @method TestDatabase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestDatabaseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestDatabase::class);
    }

    // /**
    //  * @return TestDatabase[] Returns an array of TestDatabase objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestDatabase
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
