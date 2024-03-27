<?php

namespace App\Repository;

use App\Entity\Birmchergatg4;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Birmchergatg4>
 *
 * @method Birmchergatg4|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birmchergatg4|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birmchergatg4[]    findAll()
 * @method Birmchergatg4[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Birmchergatg4Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Birmchergatg4::class);
    }

//    /**
//     * @return Birmchergatg4[] Returns an array of Birmchergatg4 objects
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

//    public function findOneBySomeField($value): ?Birmchergatg4
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
