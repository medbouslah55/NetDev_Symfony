<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation/controller/user")
 */
class ReclamationControllerUserController extends AbstractController
{
    /**
     * @Route("/afficherReclamation", name="afficherReclamation", methods={"GET"})
     */
    public function index(): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation_controller_user/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/new", name="reclamation_controller_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $date = new \DateTime('now');
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationUserType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $date->setDate(2020,05,13);
            $reclamation->getCinMembre(0);

            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('afficherReclamation');
        }

        return $this->render('reclamation_controller_user/new.html.twig', [
            'reclamation' => $reclamation,
            'formRec' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_controller_user_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation_controller_user/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_controller_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationUserType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_controller_user_index');
        }

        return $this->render('reclamation_controller_user/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_controller_user_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_controller_user_index');
    }
}
