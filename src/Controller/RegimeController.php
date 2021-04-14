<?php

namespace App\Controller;

use App\Entity\Regime;
use App\Form\RegimeType;
use App\Repository\RegimeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegimeController extends AbstractController
{
    /**
     * @Route("/admin/regimes", name="regimes_index")
     * 
     * @return Response
     */
    public function index(RegimeRepository $repo): Response
    {
        $regimes = $repo->findAll();

        return $this->render('admin/regime/index.html.twig', [
            'regimes' => $regimes,
        ]);
    }

    /**
     * Permet d'afficher le formualire d'ajout
     * 
     * @Route("/admin/regime/new", name="regime_create")
     * 
     * @return Response
     */
    public function create(Request $request): Response
    {
        $regime = new Regime();

        $form = $this->createForm(RegimeType::class, $regime, array('attr'=>array('novalidate'=>'novalidate')));
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($regime);
            $manager->flush();

            $this->addFlash('success', "L'ajout du <strong>{$regime->getType()}<strong> a été bien enregistrée!");

            return $this->redirectToRoute('regimes_index');
        }

        return $this->render('admin/regime/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permet d'afficher le formualire d'édition
     * 
     * @Route("/admin/regimes/{id}/edit", name="regime_edit")
     * 
     * @return Response
     */
    public function edit(Request $request, Regime $regime): Response
    {
        $form = $this->createForm(RegimeType::class, $regime, array('attr'=>array('novalidate'=>'novalidate')));
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($regime);
            $manager->flush();

            $this->addFlash('success', "Le <strong>{$regime->getType()}<strong> a été bien modifiée!");

            return $this->redirectToRoute('regimes_index');
        }

        return $this->render('admin/regime/edit.html.twig', [
            'form' => $form->createView(),
            'regime' => $regime,
        ]);
    }

    /**
     * Permet de supprimer un regime
     * 
     * @Route("/admin/regimes/{id}/delete", name="regime_delete")
     * 
     * @param Regime $regime
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Regime $regime, EntityManagerInterface $manager){
        $manager->remove($regime);
        $manager->flush();

        $this->addFlash('success', "Le <strong>{$regime->getType()}<strong> a été bien supprimée!");

        return $this->redirectToRoute('regimes_index');
    }
}
