<?php

namespace App\Controller;

use App\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatusfrontController extends AbstractController
{
    /**
     * @Route("/statusfront", name="statusfront")
     */
    public function index(): Response
    {
        $statues = $this->getDoctrine()->getRepository(Status::class)->findAll();
        return $this->render('statusfront/index.html.twig', [
            'statues' => $statues,
        ]);
    }
}
