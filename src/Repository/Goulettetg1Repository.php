<?php

namespace App\Repository;

use App\Entity\Goulettetg1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Goulettetg1>
 *
 * @method Goulettetg1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Goulettetg1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Goulettetg1[]    findAll()
 * @method Goulettetg1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Goulettetg1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Goulettetg1::class);
    }

//    /**
//     * @return Goulettetg1[] Returns an array of Goulettetg1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Goulettetg1
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
