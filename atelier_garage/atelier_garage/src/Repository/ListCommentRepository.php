<?php

namespace App\Repository;

use App\Entity\ListComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListComment>
 *
 * @method ListComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListComment[]    findAll()
 * @method ListComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListComment::class);
    }

//    /**
//     * @return ListComment[] Returns an array of ListComment objects
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

//    public function findOneBySomeField($value): ?ListComment
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
