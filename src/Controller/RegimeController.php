<?php

namespace App\Controller;

use App\Entity\Regime;
use App\Form\RegimeType;
use App\Repository\RegimeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function create(Request $request): Response
    {
        $regime = new Regime();

        $form = $this->createForm(RegimeType::class, $regime);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($regime);
            $manager->flush();

            $this->addFlash('success', "L'ajout du regime <strong>{$regime->getType()}<strong> a été bien enregistrée!");

            return $this->redirectToRoute('regimes_index');
        }

        return $this->render('admin/regime/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permet d'afficher le formualire d'édition
     * 
     * @Route("/regimes/{id}/edit", name="regime_edit")
     * 
     * @return Response
     */
    public function edit(Request $request, Regime $regime): Response
    {
        $form = $this->createForm(RegimeType::class, $regime);
        
        $form->handleRequest($request);

        return $this->render('admin/regime/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
