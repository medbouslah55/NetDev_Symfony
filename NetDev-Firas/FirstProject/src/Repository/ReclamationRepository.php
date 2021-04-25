<?php

namespace App\Repository;

use App\Data\SearchRec;
use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function filtreParType($etat)
    {
        return $this->createQueryBuilder('reclamationG')
        ->where('reclamation.etat LIKE :etat')
        ->setParameter('etat', '%'.$etat.'%')
        ->getQuery()
        ->getResult();
    }

    public function findReclamation($etat)
    {
        return $this->createQueryBuilder('reclamation')
            ->where('reclamation.etat LIKE :etat')
            ->orWhere('reclamation.nom LIKE :etat')
            ->orWhere('reclamation.prenom LIKE :etat')
            ->orderBy('reclamation.date', 'ASC')
            ->setParameter('etat', '%'.$etat.'%')
            ->getQuery()
            ->getResult();
    }
    public function ReclamationParDate()
    {
        return $this->createQueryBuilder('reclamation')
            ->orderBy('reclamation.date','DESC')
            ->getQuery()
            ->getResult();
    }

    public function chercherReclamationParNP($data){
        return
            $this->createQueryBuilder('reclamation')
            ->where('reclamation.nom LIKE :title')
            ->orWhere('reclamation.prenom LIKE :title')
            ->setParameter('title', "%{$data->q}%")
            ->getQuery() ->getResult();
    }


    /**
     * @return mixed
     */
    public function getMonth()
    {

        $qb = $this->createQueryBuilder('v')
            ->select('COUNT(v.id) AS post, SUBSTRING(v.date, 1, 7) AS month')
            ->groupBy('month');
        return $qb->getQuery()
            ->getResult();
    }
    public function getYear()
    {

        $qb = $this->createQueryBuilder('v')
            ->select('COUNT(v.id) AS post, SUBSTRING(v.date, 1, 4) AS year')
            ->groupBy('year');
        return $qb->getQuery()
            ->getResult();
    }
    public function getDay()
    {

        $qb = $this->createQueryBuilder('v')
            ->select('COUNT(v.id) AS post, SUBSTRING(v.date, 1, 10) AS day')
            ->groupBy('day');
        return $qb->getQuery()
            ->getResult();
    }
}
