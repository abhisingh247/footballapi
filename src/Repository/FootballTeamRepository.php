<?php

namespace App\Repository;

use App\Entity\FootballTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FootballTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method FootballTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method FootballTeam[]    findAll()
 * @method FootballTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootballTeamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FootballTeam::class);
    }

//    /**
//     * @return FootballTeam[] Returns an array of FootballTeam objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FootballTeam
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
