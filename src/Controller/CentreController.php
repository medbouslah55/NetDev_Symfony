<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Centre;
use Twilio\Rest\Client;
use App\Entity\Activite;
use App\Form\CentreType;
use App\Repository\CentreRepository;
use App\Repository\ActiviteRepository;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @Route("/centre")
 */
class CentreController extends AbstractController
{
private static $nb;

    /**
     * CentreController constructor.
     */
    public function __construct()
    {
        self::setNb(0);
    }

    /**
     * @return int
     */
    public static function getNb(): ?int
    {
        return self::$nb;
    }

    /**
     * @param int $nb
     */
    public static function setNb(?int $nb): void
    {
        self::$nb = $nb;
    }

/**
     *
     * @Route("/sms/{idCentre}", name="smsinter")
     *  @throws \Twilio\Exceptions\TwilioException
     */
    public function smsinter(Centre $centre)
    {
        return $this->render('admin/centre/sms.html.twig', [
            'centre' => $centre,
        ]);


    }
    /**
     *
     * @Route("/sms", name="sms")
     *  @throws \Twilio\Exceptions\TwilioException
     */
    public function sms(Request $request ,FlashyNotifier $flashy)
    {
        $tel = $request->query->get('tel');
        $nom = $request->query->get('nom');
        $msg = $request->query->get('msg');
        $sid = "AC92ac579b17df5817b6d5a235f882587e"; // Your Account SID from www.twilio.com/console
        $token = "b1704eaf6715336414d975619246d5b9"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);
        $centres = $this->getDoctrine()
            ->getRepository(Centre::class)
            ->findAll();
       $message = $client->messages->create(
      '+216'.$tel, // Text this number
         [
            'from' => '+19312884448', // From a valid Twilio number
            'body' => $msg
         ]
        );

      print $message->sid;

        $flashy->success('SMS envoyé avec succès au centre '.$nom.'!');
        return $this->render('admin/centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }



    /**
     *
     * @return Response
     * @Route("/mapfront", name="mapfront")
     */
    public function mapafront(): Response
    {  $repository = $this->getDoctrine()->getRepository(Centre::class);

        $all = $repository->findAll();
        return $this->render('centre/affichageMap.html.twig', [
            'centres' => $all,
        ]);

    }




    /**
     *
     * @return Response
     * @Route("/map", name="map")
     */
    public function mapa(): Response
    {  $repository = $this->getDoctrine()->getRepository(Centre::class);

        $all = $repository->findAll();
        return $this->render('admin/centre/mapa.html.twig', [
            'centres' => $all,
        ]);

    }


    /**
     * @Route("/afficherStatCentre", name="statCentre")
     */
    public function afficherStat(CentreRepository   $repo): Response
    {
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Nombre d\' en fonction du centre ');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $res=$repo->findAll();
        $data =array();

        foreach ($res as $values)
        {
            $nb=count($values->getIdacts());
           /* $i=0 ;
            foreach ($nb as $cal){
                $i=$i+1;
            }*/
            $a =array($values->getNomCentre(),intval($nb));
            array_push($data,$a);
        }

        $ob->series(array(array('type' => 'pie','name' => 'Nombre d\'activités', 'data' => $data)));



        // var_dump($en);

        return $this->render('admin/centre/AfficheStatCentre.html.twig', array(
            'chart' => $ob
        ));

    }


    /**
     * @Route("/pdf", name="PDF", methods={"GET"})
     */
    public function pdf(CentreRepository  $centreRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('admin/centre/centrePDF.html.twig', [
            'centres' => $centreRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }





    /**
     * @Route("/TrierParCentre", name="TrierParCentreAsc", methods={"GET"})
     */
    public function TrierParDate(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Centre::class);
        $centres = $repository->findByCentre();
        return $this->render('admin/centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }



    /**
     * @Route("/TrierParCentre2", name="TrierParCentre", methods={"GET"})
     */
    public function TrierParCentreDesc(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Centre::class);
        $centres = $repository->findByCentre2();
        return $this->render('admin/centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }





    /**
     * @Route("/", name="centre_index", methods={"GET"})
     */
    public function index(FlashyNotifier $flashy): Response
    {
        $centres = $this->getDoctrine()
            ->getRepository(Centre::class)
            ->findAll();
      /*  $s=self::getNb();
        echo "<script type='text/javascript'>alert('$s');</script>";
        if ($s== 1) {
        self::setNb(0);
            $s=self::getNb();
            echo "<script type='text/javascript'>alert('$s');</script>";
        $flashy->success('l\'ajout d\'un centre est effectué !');
        }*/

        return $this->render('admin/centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }

    /**
     * @Route("/listeCentres", name="centreListe", methods={"GET"})
     */
    public function index2(): Response
    {
        $centres = $this->getDoctrine()
            ->getRepository(Centre::class)
            ->findAll();

        return $this->render('centre/listercentre.html.twig', [
            'centres' => $centres,
        ]);
    }


    /**
     * @Route("/getActs/{idCentre}", name="actListe", methods={"GET"})
     */
    public function index3(Centre $centre)
    {
        return $this->render('activite/listerActParCentre.html.twig', [
            'activites' => $centre->getIdacts(),
        ]);
    }


    /**
     * @Route("/new", name="centre_new", methods={"GET","POST"})
     */
    public function new(Request $request,FlashyNotifier $flashy): Response
    {
        $centre = new Centre();
        $form = $this->createForm(CentreType::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($centre);
            $entityManager->flush();
            self::setNb(1);
           // $s= self::getNb();
           // echo "<script type='text/javascript'>alert('$s');</script>";
            $flashy->success('l\'ajout d\'un centre est effectué !','http://127.0.0.1:8000/centre/');
            return $this->redirectToRoute('centre_index');
        }

        return $this->render('admin/centre/new.html.twig', [
            'centre' => $centre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCentre}", name="centre_show", methods={"GET"})
     */
    public function show(Centre $centre): Response
    {
        return $this->render('admin/centre/show.html.twig', [
            'centre' => $centre,
        ]);
    }

    /**
     * @Route("/{idCentre}/edit", name="centre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Centre $centre,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(CentreType::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->success('la modification d\'un centre est effectuée !','http://127.0.0.1:8000/centre/');
            return $this->redirectToRoute('centre_index');
        }

        return $this->render('admin/centre/edit.html.twig', [
            'centre' => $centre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCentre}", name="centre_delete", methods={"POST"})
     */
    public function delete(Request $request, Centre $centre,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete' . $centre->getIdCentre(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($centre);
            $entityManager->flush();
        }
        $flashy->success('la suppression d\'un centre est effectuée !','http://127.0.0.1:8000/centre/');
        return $this->redirectToRoute('centre_index');
    }





}
