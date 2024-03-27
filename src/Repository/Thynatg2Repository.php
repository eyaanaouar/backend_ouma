<?php

namespace App\Repository;

use App\Entity\Thynatg2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Thynatg2>
 *
 * @method Thynatg2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thynatg2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thynatg2[]    findAll()
 * @method Thynatg2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Thynatg2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Thynatg2::class);
    }

//    /**
//     * @return Thynatg2[] Returns an array of Thynatg2 objects
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

//    public function findOneBySomeField($value): ?Thynatg2
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
