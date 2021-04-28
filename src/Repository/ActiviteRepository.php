<?php

namespace App\Repository;

use App\Entity\Activite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Activite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activite[]    findAll()
 * @method Activite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    // /**
    //  * @return Activite[] Returns an array of Activite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Activite
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function listerAct(){
        return $this->createQueryBuilder('s')
            ->where('s.idCentre = :id')
            ->setParameter('id', 1)
            ->getQuery()
            ->getResult();
    }


    public function findActbyNom($nom){
        return $this->createQueryBuilder('activite')
            ->where('activite.nomAct LIKE :nom')
            ->setParameter('nom', '%'.$nom.'%')
            ->getQuery()
            ->getResult();
    }

    public function findByAct()
    {
        return $this->createQueryBuilder('activite')
            ->orderBy('activite.prixReservation','DESC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findByAct2()
    {
        return $this->createQueryBuilder('activite')
            ->orderBy('activite.prixReservation','ASC')
            ->getQuery()
            ->getResult()
            ;
    }



    public function stat1()
    {
        $query= $this->getEntityManager()
            ->createQuery('select a.categorieAct as cat,count(a.categorieAct) as nbcat from App\Entity\Activite a group by a.categorieAct');
        return $query->getResult();
    }
    public function findByActs($id)
    {
        return $this->createQueryBuilder('activite')
            ->where('activite.idCentre = :id')
            ->setParameter('id', $id)
            ->orderBy('activite.prixReservation','DESC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findByAct2s($id)
    {
        return $this->createQueryBuilder('activite')
            ->where('activite.idCentre = :id')
            ->setParameter('id', $id)
            ->orderBy('activite.prixReservation','ASC')
            ->getQuery()
            ->getResult()
            ;
    }
}
