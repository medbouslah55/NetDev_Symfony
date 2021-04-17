<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\CoachType;
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
     * @Route("/", name="coach_index", methods={"GET"})
     */
    public function index(): Response
    {
        $coaches = $this->getDoctrine()
            ->getRepository(Coach::class)
            ->findAll();

        return $this->render('coach/index.html.twig', [
            'coaches' => $coaches,
        ]);
    }

    /**
     * @Route("/new", name="coach_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $coach = new Coach();
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($coach);
            $entityManager->flush();

            return $this->redirectToRoute('coach_index');
        }

        return $this->render('coach/new.html.twig', [
            'coach' => $coach,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="coach_show", methods={"GET"})
     */
    public function show(Coach $coach): Response
    {
        return $this->render('coach/show.html.twig', [
            'coach' => $coach,
        ]);
    }

    /**
     * @Route("/{cin}/edit", name="coach_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Coach $coach): Response
    {
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coach_index');
        }

        return $this->render('coach/edit.html.twig', [
            'coach' => $coach,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="coach_delete", methods={"POST"})
     */
    public function delete(Request $request, Coach $coach): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coach->getCin(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coach);
            $entityManager->flush();
        }

        return $this->redirectToRoute('coach_index');
    }
}
