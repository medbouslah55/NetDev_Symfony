<?php

namespace App\Controller;

use App\Entity\Regime;
use App\Entity\Urlizer;
use App\Form\RegimeType;
use App\Repository\RegimeRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegimeController extends AbstractController
{
    /**
     * @Route("/regimes", name="regimes_index")
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
     * 
     * @Route("/new", name="regime_create")
     * 
     * @return Response
     */
    public function create(Request $request): Response
    {
        $regime = new Regime();

        $form = $this->createForm(RegimeType::class, $regime);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['regime_image']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/admin/img/regime';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $regime->setImage($newFilename);
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($regime);
            $manager->flush();

            $this->addFlash('success', 'Ajout fait avec success');

            return $this->redirectToRoute('regimes_index');
        }

        return $this->render('admin/regime/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
