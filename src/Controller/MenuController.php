<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Repository\MenuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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
     * @Route("/admin/menus/new", name="menu_create")
     * 
     * @return Response
     */
    public function create(Request $request): Response
    {
        $menu = new Menu();

        $form = $this->createForm(MenuType::class, $menu, array('attr'=>array('novalidate'=>'novalidate')));
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $file1 = $menu->getMatinImg();
            $fileName1 = md5(uniqid()) . '.' . $file1->guessExtension();
            $file2 = $menu->getDejeunerImg();
            $fileName2 = md5(uniqid()) . '.' . $file2->guessExtension();
            $file3 = $menu->getDinnerImg();
            $fileName3 = md5(uniqid()) . '.' . $file3->guessExtension();

            try {
                $file1->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName1
                );
                $file2->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName2
                );
                $file3->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName3
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            $manager->persist($menu);
            $menu->setMatinImg($fileName1);
            $menu->setDejeunerImg($fileName2);
            $menu->setDinnerImg($fileName3);
            $manager->flush();

            $this->addFlash('success', "L'ajout du <strong>{$menu->getDescription()}<strong> a été bien enregistrée!");

            return $this->redirectToRoute('menus_index');
        }

        return $this->render('admin/menu/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permet de modifier le formualire d'édition
     * 
     * @Route("/admin/menus/{id}/edit", name="menu_edit")
     * 
     * @return Response
     */
    public function edit(Request $request, Menu $menu): Response
    {
        $form = $this->createForm(MenuType::class, $menu, array('attr'=>array('novalidate'=>'novalidate')));
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $file1 = $menu->getMatinImg();
            $fileName1 = md5(uniqid()) . '.' . $file1->guessExtension();
            $file2 = $menu->getDejeunerImg();
            $fileName2 = md5(uniqid()) . '.' . $file2->guessExtension();
            $file3 = $menu->getDinnerImg();
            $fileName3 = md5(uniqid()) . '.' . $file3->guessExtension();

            try {
                $file1->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName1
                );
                $file2->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName2
                );
                $file3->move(
                    $this->getParameter('menu_images_directory'),
                    $fileName3
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            $manager->persist($menu);
            $menu->setMatinImg($fileName1);
            $menu->setDejeunerImg($fileName2);
            $menu->setDinnerImg($fileName3);
            $manager->flush();


            $this->addFlash('success', "Le <strong>{$menu->getDescription()}<strong> a été bien modifiée!");

            return $this->redirectToRoute('menus_index');
        }

        return $this->render('admin/menu/edit.html.twig', [
            'form' => $form->createView(),
            'regime' => $menu,
        ]);
    }

    /**
     * Permet de supprimer un regime
     * 
     * @Route("/admin/menus/{id}/delete", name="menu_delete")
     * 
     * @param Menu $menu
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Menu $menu, EntityManagerInterface $manager){
        $manager->remove($menu);
        $manager->flush();

        $this->addFlash('success', "Le <strong>{$menu->getDescription()}<strong> a été bien supprimée!");

        return $this->redirectToRoute('menus_index');
    }

}
