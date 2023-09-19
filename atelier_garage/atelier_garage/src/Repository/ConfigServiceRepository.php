<?php

namespace App\Repository;

use App\Entity\ConfigService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConfigService>
 *
 * @method ConfigService|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConfigService|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConfigService[]    findAll()
 * @method ConfigService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfigServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConfigService::class);
    }

//    /**
//     * @return ConfigService[] Returns an array of ConfigService objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ConfigService
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
