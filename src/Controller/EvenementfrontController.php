<?php

namespace App\Controller;

use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementfrontController extends AbstractController
{
    /**
     * @Route("/evenementfront", name="evenementfront")
     */
    public function index(): Response
    {
        $evenements = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
        return $this->render('evenementfront/index.html.twig', [
            'evenements' => $evenements,
        ]);



    }
}
