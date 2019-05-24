<?php

namespace App\Repository;

use App\Entity\Exportateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Exportateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exportateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exportateur[]    findAll()
 * @method Exportateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExportateurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Exportateur::class);
    }

    // /**
    //  * @return Exportateur[] Returns an array of Exportateur objects
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
    public function findOneBySomeField($value): ?Exportateur
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
