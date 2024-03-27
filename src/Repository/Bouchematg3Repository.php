<?php

namespace App\Repository;

use App\Entity\Bouchematg3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bouchematg3>
 *
 * @method Bouchematg3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bouchematg3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bouchematg3[]    findAll()
 * @method Bouchematg3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Bouchematg3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bouchematg3::class);
    }

//    /**
//     * @return Bouchematg3[] Returns an array of Bouchematg3 objects
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

//    public function findOneBySomeField($value): ?Bouchematg3
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
