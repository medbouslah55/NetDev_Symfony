<?php

namespace App\Controller;

use App\dataserach;
use App\Entity\Reclamation;
use App\Form\ReclamationUserType;
use App\Form\serachform;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/reclamation/controller/user")
 */
class ReclamationControllerUserController extends AbstractController
{

    /**
     * @Route("/afficherReclamation", name="afficherReclamation", methods={"GET"})
     */

    public function index(PaginatorInterface $paginator, Request $request): Response
   {
        $reclamations = $this->getDoctrine()
              ->getRepository(Reclamation::class)
              ->ReclamationParDate();


       $reclamations = $paginator->paginate(
       // Doctrine Query, not results
           $reclamations,
           // Define the page parameter
           $request->query->getInt('page', 1),
           // Items per page
           3
       );


       return $this->render('reclamation_controller_user/index.html.twig', [
            'reclamations' => $reclamations,
         ]);
    }


    /**
     * @Route("/new", name="reclamation_controller_user_new", methods={"GET","POST"})
     *  @param Request $request
     * @param \Swift_Mailer $mailer
     * @return RedirectResponse|Response
     */
    public function new(Request $request , \Swift_Mailer $mailer): Response
    {
        $date = new \DateTime('now');
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationUserType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $date->setDate(2020,05,13);
            $reclamation->getCinMembre(0);
            $message = (new \Swift_Message('Confirmation Réclamation'))
                ->setFrom('fg7@students.kiron.ngo')
                ->setTo('firasgacha8@gmail.com')
                ->setBody(
                    $this->renderView(
                        'reclamation_controller_user/email.html.twig', ["reclamation"=>$reclamation]
                    ),


                    'text/html'
                );

            $mailer->send($message);
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('afficherReclamation');
        }

        return $this->render('reclamation_controller_user/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_controller_user_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation_controller_user/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_controller_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationUserType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_controller_user_index');
        }

        return $this->render('reclamation_controller_user/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_controller_user_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_controller_user_index');
    }

    /**
     * @Route("/filtrereclamation", name="filtrereclamation")
     */
    public function filtrerec(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $requestString=$request->get('filtreValue');
        $reclamation = $repository->filtreParType($requestString);

        $serializer = new Serializer(array(new DateTimeNormalizer('Y-m-d H:i:s')));
        $data=array();

        foreach ($reclamation as $r)
        {
            array_push($data,array('id'=>$r->getId(),
                'type'=>$r->getType(),
                'date'=>$serializer->normalize($r->getDate()),
                'etat'=>$r->getEtat()));


        }
        return new JsonResponse($data);
    }

}
