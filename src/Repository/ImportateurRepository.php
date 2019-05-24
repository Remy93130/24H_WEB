<?php

namespace App\Repository;

use App\Entity\Importateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Importateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Importateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Importateur[]    findAll()
 * @method Importateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImportateurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Importateur::class);
    }

    // /**
    //  * @return Importateur[] Returns an array of Importateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Importateur
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
