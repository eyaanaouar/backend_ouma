<?php

namespace App\Repository;

use App\Entity\Birmchergatg1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Birmchergatg1>
 *
 * @method Birmchergatg1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birmchergatg1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birmchergatg1[]    findAll()
 * @method Birmchergatg1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Birmchergatg1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Birmchergatg1::class);
    }

//    /**
//     * @return Birmchergatg1[] Returns an array of Birmchergatg1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Birmchergatg1
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
