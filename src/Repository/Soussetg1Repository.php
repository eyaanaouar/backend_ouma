<?php

namespace App\Repository;

use App\Entity\Soussetg1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Soussetg1>
 *
 * @method Soussetg1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Soussetg1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Soussetg1[]    findAll()
 * @method Soussetg1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Soussetg1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Soussetg1::class);
    }

//    /**
//     * @return Soussetg1[] Returns an array of Soussetg1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Soussetg1
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
