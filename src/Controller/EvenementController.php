<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/", name="evenement_index", methods={"GET"})
     */
    public function index(): Response
    {
        $evenements = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }
    /**
     * @Route("/TrierParDateDESC", name="TrierParDateDESC")
     */
    public function TrierParDate(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Evenement::class);
        $evenements = $repository->findByDate();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    public function findbyEvenement() {

        return $this->createQueryBuilder(Evenement)
            ->orderBy(Evenement.datePub, 'DESC')


    }




    /**
     * @Route("/TrierParDateAsC", name="TrierParDateASC")
     */
    public function TrierParDate2(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Evenement::class);
        $evenements = $repository->findByDate2();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }








    /**
     * @Route("/new", name="evenement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file1 = $evenement->getImage();
            $fileName1 = md5(uniqid()) . '.' . $file1->guessExtension();

            try { $file1->move(
                $this->getParameter('images_directory'),
                $fileName1
            );


            }catch (FileException $e) {
                // ... handle exception if something happens during file upload()


            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evenement);
            $evenement->setImage($fileName1);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index');
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPub}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{idPub}/edit", name="evenement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Evenement $evenement): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file1 = $evenement->getImage();
            $fileName1 = md5(uniqid()) . '.' . $file1->guessExtension();

            try { $file1->move(
                $this->getParameter('images_directory'),
                $fileName1
            );


            }catch (FileException $e) {
                // ... handle exception if something happens during file upload()


            }
            $evenement->setImage($fileName1);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evenement_index');
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPub}", name="evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdPub(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evenement_index');
    }





}
