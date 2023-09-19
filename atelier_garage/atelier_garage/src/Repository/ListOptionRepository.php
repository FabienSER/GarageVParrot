<?php

namespace App\Repository;

use App\Entity\ListOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListOption>
 *
 * @method ListOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListOption[]    findAll()
 * @method ListOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListOption::class);
    }

//    /**
//     * @return ListOption[] Returns an array of ListOption objects
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

//    public function findOneBySomeField($value): ?ListOption
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
