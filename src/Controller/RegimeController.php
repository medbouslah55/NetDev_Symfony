<?php

namespace App\Controller;

use App\Entity\Regime;
use App\Form\RegimeType;
use App\Repository\RegimeRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegimeController extends AbstractController
{
    /**
     * @Route("/regimes", name="regimes_index")
     * 
     * @return Response
     */
    public function index(RegimeRepository $repo): Response
    {
        $regimes = $repo->findAll();

        return $this->render('admin/regime/index.html.twig', [
            'regimes' => $regimes,
        ]);
    }

    /**
     * 
     * @Route("/new", name="regime_create")
     * 
     * @return Response
     */
    public function create(): Response
    {
        $regime = new Regime();
        
        $form = $this->createForm(RegimeType::class, $regime);

        return $this->render('admin/regime/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
