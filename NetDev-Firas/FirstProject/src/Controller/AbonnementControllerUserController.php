<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Abonnement;
use App\Form\AbonnementUserType;
use App\Form\SearchForm;
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/abonnement/controller/user")
 */
class AbonnementControllerUserController extends AbstractController
{
    /**
     * @Route("/afficherAbonnement", name="afficherAbonnement", methods={"GET"})
     */
    public function index(AbonnementRepository $repository,Request $request)
    {
        $data=new SearchData();
        $data->page = $request->get('page',1);
        $form = $this->createForm(SearchForm::class,$data);
        $form->handleRequest($request);
        //$abonnements = $repository->findReservationByTitre($data);
        $abonnements = $repository->findSearch($data);

        return $this->render('abonnement_controller_user/index.html.twig', [
            'abonnements' => $abonnements,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/new", name="abonnement_controller_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementUserType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($abonnement);
            $entityManager->flush();

            return $this->redirectToRoute('abonnement_controller_user_index');
        }

        return $this->render('abonnement_controller_user/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_controller_user_show", methods={"GET"})
     */
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('abonnement_controller_user/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="abonnement_controller_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Abonnement $abonnement): Response
    {
        $form = $this->createForm(AbonnementUserType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abonnement_controller_user_index');
        }

        return $this->render('abonnement_controller_user/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_controller_user_delete", methods={"POST"})
     */
    public function delete(Request $request, Abonnement $abonnement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($abonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('abonnement_controller_user_index');
    }
}
