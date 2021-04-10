<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Membre;
use App\Entity\Regime;
use App\Form\CoachType;
use App\Form\MembreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/coach")
 */
class CoachController extends AbstractController
{
    /**
     * @Route("/afficher_coach", name="afficher_coach")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Coach::class);

        $Coach = $repo->findAll();
        return $this->render('admin/coach/index.html.twig', [
            'Coachs' => $Coach,
        ]);
    }


}
