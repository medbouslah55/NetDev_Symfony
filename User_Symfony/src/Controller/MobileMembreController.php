<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Repository\MembreRepository;

use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class MobileMembreController extends AbstractController
{
    /**
     * @Route("/mobile/membre", name="mobile_membre")
     */
    public function index(MembreRepository $repository, NormalizerInterface $normalizer): Response
    {
        $membre = $repository->findAll();

        $jsonContent = $normalizer->normalize($membre, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/mobile/membre_add", name="mobile_membre_add")
     */
    public function addmembre(Request $request, NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder): Response
    {
        $em =$this->getDoctrine()->getManager();

        $membre = new Membre();
        $membre->setCin($request->get('cin'));
        $membre->setNom($request->get('nom'));
        $membre->setPrenom($request->get('prenom'));
        $membre->setSexe($request->get('sexe'));
        //$membre->setDatee($request->get('datee'));
        $membre->setTaille($request->get('taille'));
        $membre->setPoids($request->get('poids'));
        $membre->setEmail($request->get('email'));

        $hash = $encoder->encodePassword($membre,$request->get('password'));
        $membre->setPassword($hash);
        $membre->setTelephone($request->get('telephone'));

        $em->persist($membre);
        $em->flush();

        $jsonContent = $normalizer->normalize($membre, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/mobile/membre_edit/{cin}", name="mobile_membre_edit")
     */
    public function membreedit(Request $request, NormalizerInterface $normalizer,$cin)
    {
        $em =$this->getDoctrine()->getManager();
        $membre = $em->getRepository(Membre::class)->find($cin);

        $membre->setNom($request->get('nom'));
        $membre->setPrenom($request->get('prenom'));
        $membre->setSexe($request->get('sexe'));
        $membre->setDatee($request->get('datee'));
        $membre->setTaille($request->get('taille'));
        $membre->setPoids($request->get('poids'));
        $membre->setEmail($request->get('email'));
        $membre->setPassword($request->get('password'));
        $membre->setTelephone($request->get('telephone'));
        $em->flush();

        $jsonContent = $normalizer->normalize($membre, 'json', ['groups' => 'post:read']);
        return new Response("information modifier avec suc".json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/login", name="mobile_membre_login")
     */
    public function Mobilelogin(Request $request)
    {
        $email=$request->get('email');
        $passwprd=$request->get('password');

        $em =$this->getDoctrine()->getManager();
        $user =$em->getRepository(Membre::class)->findOneBy(['email'=>$email]);
        if($user)
        {
            if(password_verify($passwprd,$user->getPassword()))
            {
                return new Response("utilisateur trouvee");
            }
            else {
                return new Response("password incorrect");
            }
        }
        else {
            return new Response("membre not found");
        }
    }




}
