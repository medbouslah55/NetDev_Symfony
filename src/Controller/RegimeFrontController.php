<?php

namespace App\Controller;

use App\Repository\RegimeRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegimeFrontController extends AbstractController
{
    /**
     * @Route("/regimes", name="regime_front")
     * 
     * @return Response
     */
    public function index(RegimeRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $regimes = $repo->findAll();

        $pagination = $paginator->paginate(
            $regimes,
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );

        return $this->render('regime_front/index.html.twig', [
            'regimes' => $regimes,
            'pagination' => $pagination,
        ]);
    }
}
