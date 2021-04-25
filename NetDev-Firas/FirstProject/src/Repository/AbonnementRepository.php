<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Abonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * @method Abonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonnement[]    findAll()
 * @method Abonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonnement::class);
    }

    // /**
    //  * @return Abonnement[] Returns an array of Abonnement objects
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
    public function findOneBySomeField($value): ?Abonnement
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findSearch(SearchData $search)
    {
        $query = $this
            ->createQueryBuilder('abonnement');

        if (!empty($search->abonnements)) {
            $query = $query
                ->andWhere('abonnement.id IN (:abonnement)')
                ->setParameter('abonnement', $search->abonnements);
        }

        if (!empty($search->q)) {
            $query = $query
                ->where('abonnement.titre LIKE :title')
                ->orWhere('abonnement.type LIKE :title')
                ->orWhere('abonnement.prix LIKE :title')
                ->setParameter('title', '%'.$search->q.'%');
        }
        if (!empty($search->min)) {
            $query = $query
                ->where('abonnement.prix >= :title')
                ->setParameter('title', '%'.$search->min.'%');
        }

        if (!empty($search->max)) {
            $query = $query
                ->where('abonnement.prix <= :title')
                ->setParameter('title', '%'.$search->max.'%');
        }
        return $query->getQuery() ->getResult();
    }
    public function findReservationByTitre($data){
        return
            $this
                ->createQueryBuilder('abonnement')
                ->where('abonnement.titre LIKE :title')
                ->orWhere('abonnement.type LIKE :title')
                ->setParameter('title', '%'.$data.'%')
                ->getQuery()
                ->getResult();
    }
}
