<?php

namespace App\Repository;

use App\Entity\Usersfixtures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Usersfixtures>
 *
 * @method Usersfixtures|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usersfixtures|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usersfixtures[]    findAll()
 * @method Usersfixtures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersfixturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usersfixtures::class);
    }

//    /**
//     * @return Usersfixtures[] Returns an array of Usersfixtures objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Usersfixtures
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
