<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Centre;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//excel
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



/**
 * @Route("/activite")
 */
class ActiviteController extends AbstractController
{
    /**
     * @Route("/xl", name="excel", methods={"GET"})
     */
    public function excel(FlashyNotifier $flashy): Response
    {
        $activites = $this->getDoctrine()
            ->getRepository(Activite::class)
            ->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'id_act');
        $sheet->setCellValue('B1', 'catégorie');
        $sheet->setCellValue('C1', 'nom_act');
        $sheet->setCellValue('D1', 'prix');
        $sheet->setCellValue('E1', 'date');
        $sheet->setCellValue('F1', 'capacité');
        $sheet->setCellValue('G1', 'centre');
        $sheet->setCellValue('H1', 'coach');
        $i=2;
        foreach ($activites as $cal){
            $id=$cal->getIdAct();
            $sheet->setCellValue('A'.strval($i), $cal->getIdAct() );
            $sheet->setCellValue('B'.strval($i),  $cal->getCategorieAct());
            $sheet->setCellValue('C'.strval($i),  $cal->getNomAct());
            $sheet->setCellValue('D'.strval($i),  $cal->getPrixReservation());
            $sheet->setCellValue('E'.strval($i),  $cal->getDateAct());
            $sheet->setCellValue('F'.strval($i),  $cal->getCapacite());
            $sheet->setCellValue('G'.strval($i),  $cal->getIdCentre()->getNomCentre());
            $sheet->setCellValue('H'.strval($i),  $cal->getCinCoach()->getNom());
            $i=$i+1;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('listeActivite.xlsx');
        $flashy->success('Vérifier votre dossier public');
        return $this->render('admin/activite/index.html.twig', [
            'activites' => $activites,
        ]);
        //https://phpspreadsheet.readthedocs.io/en/latest/
        //https://www.youtube.com/watch?v=4ULDJ5LfdwU
    }

    /**
     * @Route("/calendrier", name="calend")
     */
    public function calendrier(): Response
    {
        return $this->render('admin/activite/actDate.html.twig');
    }


    /**
     * @Route("/TrierParActFront/{idCentre}", name="TrierParActAscFront", methods={"GET"})
     */
    public function TrierParPrix2(Request $request,Centre $centre): Response
    {
        $repository = $this->getDoctrine()->getRepository(Activite::class);
        $act = $repository->findByActs($centre->getIdCentre());

        return $this->render('activite/listerActParCentre.html.twig', [
            'activites' => $act,
        ]);
    }



    /**
     * @Route("/TrierParAct2Front/{idCentre}", name="TrierParActFront", methods={"GET"})
     */
    public function TrierParCentreDesc2(Request $request,Centre $centre): Response
    {
        $repository = $this->getDoctrine()->getRepository(Activite::class);
        $act = $repository->findByAct2s($centre->getIdCentre());
        return $this->render('activite/listerActParCentre.html.twig', [
            'activites' => $act,
        ]);
    }







    /**
     * @Route("/afficherStat", name="stat")
     */
    public function afficherStat(ActiviteRepository  $repo): Response


    {
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('statistique par catégorie ');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $res=$repo->stat1();
        $data =array();
        foreach ($res as $values)
        {
            $a =array($values['cat'],intval($values['nbcat']));
            array_push($data,$a);
        }

        $ob->series(array(array('type' => 'column','name' => 'Nombre d\'activités', 'data' => $data)));



        // var_dump($en);

        return $this->render('admin/activite/AfficheStatCat.html.twig', array(
            'chart' => $ob
        ));

    }




    /**
 * @Route("/TrierParAct", name="TrierParActAsc", methods={"GET"})
 */
    public function TrierParPrix(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Activite::class);
        $act = $repository->findByAct();
        return $this->render('admin/activite/index.html.twig', [
            'activites' => $act,
        ]);
    }



    /**
     * @Route("/TrierParAct2", name="TrierParAct", methods={"GET"})
     */
    public function TrierParCentreDesc(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Activite::class);
        $act = $repository->findByAct2();
        return $this->render('admin/activite/index.html.twig', [
            'activites' => $act,
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/searchAct",name="searchAct")
     */
    public function searchactivite(Request $request)
    {

        $repository = $this->getDoctrine()->getRepository(Activite::class);
        $requestString=$request->get('searchValue');
        $activite = $repository->findActbyNom($requestString);
        return $this->render('admin/activite/listeAct.html.twig' ,[
            "activites"=>$activite
        ]);
    }





    /**
     * @Route("/", name="activite_index", methods={"GET"})
     */
    public function index(): Response
    {
        $activites = $this->getDoctrine()
            ->getRepository(Activite::class)
            ->findAll();

        return $this->render('admin/activite/index.html.twig', [
            'activites' => $activites,
        ]);
    }

    /**
     * @Route("/new", name="activite_new", methods={"GET","POST"})
     */
    public function new(Request $request,FlashyNotifier $flashy): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activite);
            $entityManager->flush();
            $flashy->success('l\'ajout d\'une activité est effectué !','http://127.0.0.1:8000/activite/');
            return $this->redirectToRoute('activite_index');
        }

        return $this->render('admin/activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAct}", name="activite_show", methods={"GET"})
     */
    public function show(Activite $activite): Response
    {
        return $this->render('admin/activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }

    /**
     * @Route("/{idAct}/edit", name="activite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Activite $activite,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->success('la modification d\'une activité est effectué !','http://127.0.0.1:8000/activite/');
            return $this->redirectToRoute('activite_index');
        }

        return $this->render('admin/activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAct}", name="activite_delete", methods={"POST"})
     */
    public function delete(Request $request, Activite $activite,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activite->getIdAct(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($activite);
            $entityManager->flush();
        }
        $flashy->success('la suppression d\'une activité est effectué !','http://127.0.0.1:8000/activite/');
        return $this->redirectToRoute('activite_index');
    }
}
