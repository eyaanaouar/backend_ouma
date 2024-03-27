<?php

namespace App\Repository;

use App\Entity\Bouchematg4;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bouchematg4>
 *
 * @method Bouchematg4|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bouchematg4|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bouchematg4[]    findAll()
 * @method Bouchematg4[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Bouchematg4Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bouchematg4::class);
    }

//    /**
//     * @return Bouchematg4[] Returns an array of Bouchematg4 objects
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

//    public function findOneBySomeField($value): ?Bouchematg4
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
