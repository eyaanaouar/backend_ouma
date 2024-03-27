<?php

namespace App\Repository;

use App\Entity\Birmchergatg3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Birmchergatg3>
 *
 * @method Birmchergatg3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birmchergatg3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birmchergatg3[]    findAll()
 * @method Birmchergatg3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Birmchergatg3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Birmchergatg3::class);
    }

//    /**
//     * @return Birmchergatg3[] Returns an array of Birmchergatg3 objects
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

//    public function findOneBySomeField($value): ?Birmchergatg3
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
