<?php

namespace App\Repository;

use App\Entity\Centre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Centre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Centre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Centre[]    findAll()
 * @method Centre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Centre::class);
    }

    // /**
    //  * @return Centre[] Returns an array of Centre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Centre
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByCentre()
    {
        return $this->createQueryBuilder('Centre')
            ->orderBy('Centre.nomCentre','DESC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findByCentre2()
    {
        return $this->createQueryBuilder('Centre')
            ->orderBy('Centre.nomCentre','ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function orderbyprice(){
        $em=$this->getEntityManager();
        $query=$em->createQuery('select r from App\Entity\Centre r order by r.nomCentre ASC ');
        return $query->getResult();
    }

    public function findActbyNom($nom){
        return $this->createQueryBuilder('centre')
            ->where('centre.nomCentre LIKE :nom')
            ->setParameter('nom', '%'.$nom.'%')
            ->getQuery()
            ->getResult();
    }


}
