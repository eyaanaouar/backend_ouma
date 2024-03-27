<?php

namespace App\Repository;

use App\Entity\Ferianatg2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ferianatg2>
 *
 * @method Ferianatg2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ferianatg2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ferianatg2[]    findAll()
 * @method Ferianatg2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Ferianatg2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ferianatg2::class);
    }

//    /**
//     * @return Ferianatg2[] Returns an array of Ferianatg2 objects
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

//    public function findOneBySomeField($value): ?Ferianatg2
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
