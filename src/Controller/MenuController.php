<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Repository\MenuRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
    /**
     * @Route("admin/menus", name="menus_index")
     * 
     * @return Response
     */
    public function index(MenuRepository $repo): Response
    {
        $menus = $repo->findAll();

        return $this->render('admin/menu/index.html.twig', [
            'menus' => $menus,
        ]);
    }

    /**
     * Permet d'afficher le formualire d'ajout
     * 
     * @Route("/admin/menu/new", name="menu_create")
     * 
     * @return Response
     */
    public function create(Request $request): Response
    {
        $menu = new Menu();

        $form = $this->createForm(MenuType::class, $menu);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($menu);
            $manager->flush();

            $this->addFlash('success', "L'ajout du <strong>{$menu->getDescription()}<strong> a été bien enregistrée!");

            return $this->redirectToRoute('menus_index');
        }

        return $this->render('admin/menu/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
