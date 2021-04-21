<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ActiviteRepository;
use App\Repository\MembreRepository;
use App\Repository\PanierRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    /**
     * @Route("/addreservation", name="addreservation", methods={"GET","POST"})
     */
    public function new(Request $request, ActiviteRepository $activiteRepository , PanierRepository $panierRepository , MembreRepository $membreRepository ): Response
    {
        $membre = $membreRepository->findAll()[0];
        $panier = $panierRepository->findAll()[0];
        $activite = $activiteRepository->findAll()[0];

        $reservation = new Reservation();
        $reservation->setIdAct($activite);
        $reservation->setCinMembre($membre);
        $reservation->setIdPanier($panier);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('showreservation');
        }

        return $this->render('front/Reservation/addReservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/showreservation", name="showreservation", methods={"GET","POST"})
     */
    public function show(Request $request, ActiviteRepository $activiteRepository , PanierRepository $panierRepository , MembreRepository $membreRepository): Response
    {
        $reservations = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findAll();

        return $this->render('front/reservation/showReservation.html.twig', [
            'reservations' => $reservations,
        ]);

    }

    /**
     * @Route("/deletereservation/{idReservation}", name="reservation_delete_front", methods={"GET","POST"})
     */
    public function frontDelete(Request $request,Reservation $idReservation ,ReservationRepository $repository ): Response
    {
        $reservation = $repository->find($idReservation->getIdReservation());
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('showreservation');
    }

    /**
     * @Route("/editreservation/{idReservation}", name="reservation_edit_front", methods={"GET","POST"})
     */
    public function frontEdit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showreservation');
        }

        return $this->render('front/Reservation/editReservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }
}
