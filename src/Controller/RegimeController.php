<?php

namespace App\Controller;

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
        return $this->render('admin/regime/index.html.twig', [
            'controller_name' => 'RegimeController',
        ]);
    }
}
