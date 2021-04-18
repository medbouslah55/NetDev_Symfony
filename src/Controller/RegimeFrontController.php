<?php

namespace App\Controller;

use App\Entity\Menu;
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

    /**
     * @Route("/regimes/{id}", name="menus_front")
     * 
     * @return Response
     */
    public function show($id, PaginatorInterface $paginator, Request $request): Response
    {
        $menu = $this->getDoctrine()->getRepository(Menu::class)->findOneBy(array('idRegime' => $id), array('numJour' => 'ASC'));
        $menus = $this->getDoctrine()->getRepository(Menu::class)->findBy(array('idRegime' => $id), array('numJour' => 'ASC'));
        
        $pagination = $paginator->paginate(
            $menus,
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );

        return $this->render('menu_front/index.html.twig', [
            'menu' => $menu,
            'menus' => $menus,
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/regimes/{id}/menus", name="menus_front_show")
     * 
     * @return Response
     */
    public function showall($id, PaginatorInterface $paginator, Request $request): Response
    {
        $menus = $this->getDoctrine()->getRepository(Menu::class)->findBy(array('idRegime' => $id), array('numJour' => 'ASC'));

        $pagination = $paginator->paginate(
            $menus,
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );

        return $this->render('menu_front/show_all.html.twig', [
            'menus' => $menus,
            'pagination' => $pagination,
        ]);
    }
}
