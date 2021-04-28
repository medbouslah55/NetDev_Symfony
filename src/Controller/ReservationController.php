<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Membre;
use App\Entity\Panier;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ActiviteRepository;
use App\Repository\MembreRepository;
use App\Repository\PanierRepository;
use App\Repository\ReservationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Doctrine\ORM\EntityManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/show", name="reservation_index", methods={"GET"})
     */
    public function index(Request $request,PaginatorInterface $paginator,ReservationRepository $reservationRepository): Response
    {


        $reservation =$reservationRepository->findAll();
        $reservations = $paginator->paginate(
        // Doctrine Query, not results
            $reservation,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('admin/reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * @Route("/stats", name="statsreservation")
     */
    public function stats() : Response
    {

        $p=$this->getDoctrine()->getRepository(Reservation::class);
        //year
        $years = $p->getYear();
        $data = [['Years', 'Nombre de reservations']];
        foreach($years as $year)
        {
            $data[] = array($year['year'], $year['post']);
        }

        $bar1 = new barchart();
        $bar1->getData()->setArrayToDataTable(
            $data
        );
        $bar1->getOptions()->setTitle('par années');
        $bar1->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar1->getOptions()->getTitleTextStyle()->setFontSize(25);

        //month
        $months = $p->getMonth();
        $data = [['Mois', 'Nombre de reservations']];
        foreach($months as $month)
        {
            $data[] = array($month['month'], $month['post']);
        }

        $bar2 = new barchart();
        $bar2->getData()->setArrayToDataTable(
            $data
        );
        $bar2->getOptions()->setTitle('par mois');
        $bar2->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar2->getOptions()->getTitleTextStyle()->setFontSize(25);

        //day
        $days = $p->getDay();
        $data = [['Années', 'Nombre de reservations']];
        foreach($days as $day)
        {
            $data[] = array($day['day'], $day['post']);
        }

        $bar3 = new barchart();
        $bar3->getData()->setArrayToDataTable(
            $data
        );
        $bar3->getOptions()->setTitle('par jour');
        $bar3->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar3->getOptions()->getTitleTextStyle()->setFontSize(25);


        return $this->render('admin/reservation/stats.html.twig', array('barchart1' => $bar1, 'barchart2' => $bar2,'barchart3' => $bar3));
    }

    /**
     * @Route("/new", name="reservation_new", methods={"GET","POST"})
     */
    public function new(Request $request, ActiviteRepository $activiteRepository , PanierRepository $panierRepository , MembreRepository $membreRepository): Response
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

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('admin/reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReservation}", name="reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('admin/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{idReservation}/edit", name="reservation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('admin/reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReservation}", name="reservation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }




}
