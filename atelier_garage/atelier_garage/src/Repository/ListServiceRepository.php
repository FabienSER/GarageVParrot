<?php

namespace App\Repository;

use App\Entity\ListService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListService>
 *
 * @method ListService|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListService|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListService[]    findAll()
 * @method ListService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListService::class);
    }

//    /**
//     * @return ListService[] Returns an array of ListService objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ListService
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
