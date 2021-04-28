<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/reclamation")
 */
class ReclamationControllerAdmin extends AbstractController
{
    /**
     * @Route("/statsReclamation", name="statsReclamation")
     */
    public function stats() : Response
    {

        $p=$this->getDoctrine()->getRepository(Reclamation::class);
        //type
        $type= $p->getTypeRec();
        $data = [['type', 'Reclamation']];
        foreach ($type as $types)
        {
            $data[] = array($types['post'], $types['type']);
        }
        $line = new lineChart();
        $line->getData()->setArrayToDataTable(
            $data
        );
        $line->getOptions()->setTitle('Classification Par Type');
        $line->getOptions()->getTitleTextStyle()->setColor('#F44455');
        $line->getOptions()->getTitleTextStyle()->setFontSize(25);
        //year
        $years = $p->getYear();
        $data = [['Years', 'Nombre de reclamation']];
        foreach($years as $year)
        {
            $data[] = array($year['year'], $year['post']);
        }

        $bar1 = new BarChart();
        $bar1->getData()->setArrayToDataTable(
            $data
        );
        $bar1->getOptions()->setTitle('Par Années');
        $bar1->getOptions()->getTitleTextStyle()->setColor('#354052');
        $bar1->getOptions()->getTitleTextStyle()->setFontSize(25);

        //month
        $months = $p->getMonth();
        $data = [['Mois', 'Nombre de reclamation']];
        foreach($months as $month)
        {
            $data[] = array($month['month'], $month['post']);
        }

        $bar2 = new BarChart();
        $bar2->getData()->setArrayToDataTable(
            $data
        );
        $bar2->getOptions()->setTitle('Par Mois');
        $bar2->getOptions()->getTitleTextStyle()->setColor('#FCC100');
        $bar2->getOptions()->getTitleTextStyle()->setFontSize(25);

        //day
        $days = $p->getDay();
        $data = [['Années', 'Nombre de reclamation']];
        foreach($days as $day)
        {
            $data[] = array($day['day'], $day['post']);
        }

        $bar3 = new BarChart();
        $bar3->getData()->setArrayToDataTable(
            $data
        );
        $bar3->getOptions()->setTitle('Par Jour');
        $bar3->getOptions()->getTitleTextStyle()->setColor('#47BAC1');
        $bar3->getOptions()->getTitleTextStyle()->setFontSize(25);

        return $this->render('reclamation/stats.html.twig', array('barchart1' => $bar1, 'barchart2' => $bar2,'barchart3' => $bar3,'linechart'=>$line));
    }
    /**
     * @Route("/searchReclamation ", name="searchReclamation")
     */
    public function searchReclamation(Request $request,PaginatorInterface $paginator): Response
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $requestString=$request->get('searchValue');
        $reclamation = $repository->findReclamation($requestString);
        $serializer = new Serializer(array(new DateTimeNormalizer('Y-m-d H:i:s')));
        $data=array();

        foreach ($reclamation as $v)
        {
            array_push($data,array("id"=>$v->getId(),
                "nom"=>$v->getNom(),
                "prenom"=>$v->getPrenom(),
                "mail"=>$v->getMail(),
                "type"=>$v->getType(),
                "date"=>$serializer->normalize($v->getDate()),
                "description"=>$v->getDescription(),
                "etat"=>$v->getEtat()));
        }

        $reclamation = $paginator->paginate(
        // Doctrine Query, not results
            $reclamation,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return new JsonResponse($data);
       // return $this->render('reclamation/index.html.twig', [
         //   'reclamations' => $reclamation,
        //]);
    }
    /**
     * @Route("/", name="reclamation_index", methods={"GET","POST"})
     */
    public function index(ReclamationRepository $repository,PaginatorInterface $paginator, Request $request): Response
    {
        $data=new SearchData();
        $form =$this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $reclamations = $repository->chercherReclamationParNP($data);
        $reclamations = $paginator->paginate(
        // Doctrine Query, not results
            $reclamations,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'info',
                'Votre Réclamation a été modifier avec succès !'
            );

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }
        return $this->redirectToRoute('reclamation_index');
    }




    /**
     * @Route("/listrec/{id}", name="listrec", methods={"GET"})
     * @param ReclamationRepository $reclamationRepository
     * @param $id
     * @return Response
     */
    public function listrec(reclamationRepository $reclamationRepository,$id): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reclamation/listrec.html.twig', [
            'reclamation' => $reclamationRepository->find($id),
        ]);


        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("reclamation.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     *
     * @Route("reclamation/search", name="searchAdmin")
     *
     */
    public function searchAdmin(ReclamationRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $requestString = $request->get('searchValue');
        $reclamation = $repository->findReclamation($requestString);

        $pagination = $paginator->paginate(
            $reclamation,
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );

        return $this->render('reclamation/_searchRec.html.twig', [
            'data' => $reclamation,
            'pagination' => $pagination,
        ]);
    }
    /**
     * @Route("/showreclamation", name="showreclamation", methods={"GET","POST"})
     */
    public function chercherreclamation(Request $request, ReclamationRepository $reclamationRepository,PaginatorInterface $paginator ): Response
    {
        // instance of Data\searchData
        $data = new SearchRec();
        $form =$this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $reservation =$reclamationRepository->chercherReclamationParNP($data);
        $reservations = $paginator->paginate(
        // Doctrine Query, not results
            $reservation,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('reclamation/index.html.twig', [
            'reservations' => $reservations,
            'form' => $form->createView(),
        ]);

    }



}
