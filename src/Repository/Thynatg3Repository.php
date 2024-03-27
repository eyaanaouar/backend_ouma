<?php

namespace App\Repository;

use App\Entity\Thynatg3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Thynatg3>
 *
 * @method Thynatg3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thynatg3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thynatg3[]    findAll()
 * @method Thynatg3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Thynatg3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Thynatg3::class);
    }

//    /**
//     * @return Thynatg3[] Returns an array of Thynatg3 objects
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

//    public function findOneBySomeField($value): ?Thynatg3
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
