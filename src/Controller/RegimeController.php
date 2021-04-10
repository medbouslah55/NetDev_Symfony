<?php

namespace App\Controller;

use App\Entity\Regime;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegimeController extends AbstractController
{
    /**
     * @Route("/regimes", name="regimes_index")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Regime::class);

        $regimes = $repo->findAll();

        return $this->render('admin/regime/index.html.twig', [
            'regimes' => $regimes,
        ]);
    }
}
