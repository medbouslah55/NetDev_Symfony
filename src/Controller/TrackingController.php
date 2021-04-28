<?php

namespace App\Controller;

use App\Entity\Tracking;
use App\Form\TrackingType;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/tracking")
 */
class TrackingController extends AbstractController
{
    /**
     * @Route("/", name="tracking_index", methods={"GET"})
     */
    public function index(): Response
    {
        $trackings = $this->getDoctrine()
            ->getRepository(Tracking::class)
            ->findAll();

        return $this->render('tracking/index.html.twig', [
            'trackings' => $trackings,
        ]);
    }

    /**
     * @Route("/new", name="tracking_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tracking = new Tracking();
        $form = $this->createForm(TrackingType::class, $tracking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tracking);
            $entityManager->flush();

            return $this->redirectToRoute('tracking_index');
        }

        return $this->render('tracking/new.html.twig', [
            'tracking' => $tracking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTrack}", name="tracking_show", methods={"GET"})
     */
    public function show(Tracking $tracking): Response
    {
        return $this->render('tracking/show.html.twig', [
            'tracking' => $tracking,
        ]);
    }

    /**
     * @Route("/{idTrack}/edit", name="tracking_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tracking $tracking): Response
    {
        $form = $this->createForm(TrackingType::class, $tracking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tracking_index');
        }

        return $this->render('tracking/edit.html.twig', [
            'tracking' => $tracking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTrack}", name="tracking_delete", methods={"POST"})
     */
    public function delete(Request $request, Tracking $tracking): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tracking->getIdTrack(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tracking);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tracking_index');
    }

    // /**
    //  * @Route("/stat", name="tracking_stat")
    //  */
    // public function stat()
    // {
    //     $ob = new Highchart();
    //     $ob->chart->renderTo('linechart');
    //     $ob->title->text('Statistiques des Menus');
    //     $ob->chart->type('column');
    //     $ob->xAxis->title(array('text'  => "L'identitfiant des menus"));
    //     $ob->yAxis->title(array('text'  => "Nombre de Calories"));

    //     $trackings = $this->getDoctrine()
    //         ->getRepository(Tracking::class)
    //         ->findAll();

    //     $data =array();

    //     foreach ($trackings as $values)
    //     {
    //         $a =array($values->getInt(),intval($values->getInt()));
    //         array_push($data,$a);
    //     }

    //     $ob->series(array(array('name' => 'Tracking', 'data' => $data)));
       
    //     return $this->render('admin/menu/stat.html.twig', array(
    //         'chart' => $ob
    //     ));
    // }
}
