<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/searchReclamation ", name="searchReclamation")
     */
    public function searchReclamation(Request $request,NormalizerInterface $Normalizer): JsonResponse
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


        return new JsonResponse($data);
    }
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
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


}
