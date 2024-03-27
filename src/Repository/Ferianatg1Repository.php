<?php

namespace App\Repository;

use App\Entity\Ferianatg1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ferianatg1>
 *
 * @method Ferianatg1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ferianatg1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ferianatg1[]    findAll()
 * @method Ferianatg1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Ferianatg1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ferianatg1::class);
    }

//    /**
//     * @return Ferianatg1[] Returns an array of Ferianatg1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ferianatg1
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
