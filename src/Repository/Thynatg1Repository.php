<?php

namespace App\Repository;

use App\Entity\Thynatg1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Thynatg1>
 *
 * @method Thynatg1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thynatg1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thynatg1[]    findAll()
 * @method Thynatg1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Thynatg1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Thynatg1::class);
    }

//    /**
//     * @return Thynatg1[] Returns an array of Thynatg1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Thynatg1
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
