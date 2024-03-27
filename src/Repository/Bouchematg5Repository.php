<?php

namespace App\Repository;

use App\Entity\Bouchematg5;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bouchematg5>
 *
 * @method Bouchematg5|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bouchematg5|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bouchematg5[]    findAll()
 * @method Bouchematg5[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Bouchematg5Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bouchematg5::class);
    }

//    /**
//     * @return Bouchematg5[] Returns an array of Bouchematg5 objects
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

//    public function findOneBySomeField($value): ?Bouchematg5
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
