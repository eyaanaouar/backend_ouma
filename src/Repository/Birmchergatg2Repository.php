<?php

namespace App\Repository;

use App\Entity\Birmchergatg2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Birmchergatg2>
 *
 * @method Birmchergatg2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birmchergatg2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birmchergatg2[]    findAll()
 * @method Birmchergatg2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Birmchergatg2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Birmchergatg2::class);
    }

//    /**
//     * @return Birmchergatg2[] Returns an array of Birmchergatg2 objects
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

//    public function findOneBySomeField($value): ?Birmchergatg2
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
