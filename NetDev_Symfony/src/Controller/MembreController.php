<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\MembreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/membre")
 */
class MembreController extends AbstractController
{
    /**
     * @Route("/", name="membre_index", methods={"GET"})
     */
    public function index(): Response
    {
        $membres = $this->getDoctrine()
            ->getRepository(Membre::class)
            ->findAll();

        return $this->render('membre/index.html.twig', [
            'membres' => $membres,
        ]);
    }

    /**
     * @Route("/new", name="membre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $membre = new Membre();
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($membre);
            $entityManager->flush();

            return $this->redirectToRoute('membre_index');
        }

        return $this->render('membre/new.html.twig', [
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="membre_show", methods={"GET"})
     */
    public function show(Membre $membre): Response
    {
        return $this->render('membre/show.html.twig', [
            'membre' => $membre,
        ]);
    }

    /**
     * @Route("/{cin}/edit", name="membre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Membre $membre): Response
    {
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('membre_index');
        }

        return $this->render('membre/edit.html.twig', [
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="membre_delete", methods={"POST"})
     */
    public function delete(Request $request, Membre $membre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$membre->getCin(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($membre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('membre_index');
    }
}
