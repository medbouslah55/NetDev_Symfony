<?php

namespace App\Controller;

use App\Entity\Activite;
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
use Knp\Component\Pager\PaginatorInterface;
use App\Data\SearchData;
use App\Form\SearchType1;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\HttpFoundation\Session\Session;

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
     * @Route("/newreservation/{id}", name="newreservation", methods={"GET","POST"})
     */
    public function newReservation(Session $session ,Activite $id ,Request $request, ActiviteRepository $activiteRepository , PanierRepository $panierRepository , MembreRepository $membreRepository ): Response
    {
        $membre = $membreRepository->findAll()[0];
        $panier = $panierRepository->findAll()[0];
        $activite = $activiteRepository->find($id->getIdAct());

        $reservation = new Reservation();
        $reservation->setIdAct($activite);
        $reservation->setDateAct(\DateTime::createFromFormat('Y-m-d', $activite->getDateAct()));
        $reservation->setCinMembre($membre);
        $reservation->setIdPanier($panier);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $recaptcha = $request->request->get('g-recaptcha-response');


        if ($form->isSubmitted() && $form->isValid() ) {
            if(!$recaptcha){
                $error = true;
                return $this->render('front/Reservation/addReservation.html.twig', [
                    'reservation' => $reservation,
                    'form' => $form->createView(),
                    'error' => $error,
                ]);

            } else {
            $res = $request->request->get('reservation');
            $nbPlace = (int)$res["nbPlace"];
            $newCapacite = $activite->getCapacite() - $nbPlace;
            $activite->setCapacite($newCapacite);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();
            $session->set('nbPlace' , $nbPlace);
            $session->set('price' , $activite->getPrixReservation());
            $session->set('nomAct' , $activite->getNomAct());



                return $this->redirectToRoute('check' );
            }
        }

        return $this->render('front/Reservation/addReservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/showreservation", name="showreservation", methods={"GET","POST"})
     */
    public function show(Request $request, ActiviteRepository $activiteRepository , PanierRepository $panierRepository , MembreRepository $membreRepository , PaginatorInterface $paginator , ReservationRepository $reservationRepository): Response
    {
        // instance of Data\searchData
        $data = new SearchData();
        $form =$this->createForm(SearchType1::class, $data);
        $form->handleRequest($request);

        $reservation =$reservationRepository->findReservationByNom($data);
        $reservations = $paginator->paginate(
        // Doctrine Query, not results
            $reservation,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('front/reservation/showReservation.html.twig', [
            'reservations' => $reservations,
            'form' => $form->createView(),
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
