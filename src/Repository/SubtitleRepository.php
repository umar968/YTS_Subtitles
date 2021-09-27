<?php

namespace App\Repository;

use App\Entity\Subtitle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subtitle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subtitle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subtitle[]    findAll()
 * @method Subtitle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubtitleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subtitle::class);
    }

    // /**
    //  * @return Subtitle[] Returns an array of Subtitle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Subtitle
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
