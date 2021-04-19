<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\CoachType;
use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/coach")
 */
class CoachController extends AbstractController
{
    /**
     * @Route("/pdf", name="PDF", methods={"GET"})
     */
    public function pdf(CoachRepository $CoachRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('coach/PdfCoach.html.twig', [
            'coaches' => $CoachRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "coaches" => true
        ]);
    }

    /**
     * @Route("/TrierParNomDESC", name="TrierParNomDESC")
     */
    public function TrierParNom(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Coach::class);
        $coaches = $repository->findByName();

        return $this->render('coach/index.html.twig', [
            'coaches' => $coaches,
        ]);
    }
    /**
     * @Route("/TrierParNomASC", name="TrierParNomASC")
     */
    public function TrierParNom2(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Coach::class);
        $coaches = $repository->findByName2();

        return $this->render('coach/index.html.twig', [
            'coaches' => $coaches,
        ]);
    }

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
        if ($this->isCsrfTokenValid('delete' . $coach->getCin(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coach);
            $entityManager->flush();
        }

        return $this->redirectToRoute('coach_index');
    }



}
