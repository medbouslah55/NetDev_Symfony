<?php

namespace App\Controller;

use App\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MembreApiController extends AbstractController
{
    /**
     * @Route("/membre/api", name="membre_api")
     */
    public function index(): Response
    {
        return $this->render('membre_api/index.html.twig', [
            'controller_name' => 'MembreApiController',
        ]);
    }



    /**
     * @Route("membre/AfficherUsers", name="AfficherUsersMobile")
     */
    public function AfficherUsersMobile(): Response
    {
        $users = $this->getDoctrine()->getRepository(Membre::class)->findAll();
        $jsonContent= Array();
        foreach ($users as $key=>$user){
            $jsonContent[$key]['cin']= $user->getCin();
            $jsonContent[$key]['nom']= $user->getNom();
            $jsonContent[$key]['prenom']= $user->getPrenom();
            $jsonContent[$key]['sexe']= $user->getSexe();
            $jsonContent[$key]['taille']= $user->getTaille();
            $jsonContent[$key]['poids']= $user->getPoids();
            $jsonContent[$key]['email']= $user->getEmail();
            $jsonContent[$key]['password']= $user->getPassword();
            $jsonContent[$key]['telephone']= $user->getTelephone();


        }
        return new JsonResponse($jsonContent);
    }


    /**
     * @Route("membre/signup", name="app_register")
     */
    public function  signupAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {

        $cin = $request->query->get("cin");
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $sexe = $request->query->get("sexe");
        //$datee = $request->query->get("datee");
        $taille= $request->query->get("taille");
        $poids= $request->query->get("poids");
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        $telephone = $request->query->get("telephone");

        //control al email lazm @
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new Response("email invalid.");
        }
        $membre = new Membre();
        $membre->setCin($cin);
        $membre->setNom($nom);
        $membre->setPrenom($prenom);
        $membre->setSexe($sexe);
        $membre->setTaille($taille);
        $membre->setPoids($poids);
        $membre->setEmail($email);
        $pass = $passwordEncoder->encodePassword(
            $membre,
            $password
        );
        $membre->setPassword($pass);
        $membre->setTelephone($telephone);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            return new JsonResponse("success",200);//200 ya3ni http result ta3 server OK
        }catch (\Exception $ex) {
            return new Response("execption ".$ex->getMessage());
        }
    }

    /**
     * @Route("membre/signin", name="app_login")
     */

    public function signinAction(Request $request) {
        $email = $request->query->get("email");
        $password = $request->query->get("password");

        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository(Membre::class)->findOneBy(['email'=>$email]);//bch nlawj ala user b username ta3o fi base s'il existe njibo
        //ken l9ito f base
        if($membre){
            //lazm n9arn password zeda madamo crypté nesta3mlo password_verify
            if(password_verify($password,$membre->getPassword())) {
                /*$serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($email);
                return new JsonResponse($formatted);
                */
                $response = new JsonResponse(['resultat'=>"true"]);
                return $response;
            }
            else {
                $response = new JsonResponse(['resultat'=>"password"]);
                return $response;
            }
        }
        else {
            $response = new JsonResponse(['resultat'=>"false"]);
            return $response;

        }
    }



    /**
     * @Route("membre/UpdateUserMobile/{cin}/{nom}/{prenom}/{taille}/{poids}/{email}/{telephone}", name="UpdateUserMobile")
     */
    public function UpdateUserMobile($cin,$nom,$prenom,$taille,$poids,$email,$telephone)
    {
        $membre = $this->getDoctrine()->getRepository(Membre::class)->find($cin);

        $membre->setNom($nom);
        $membre->setPrenom($prenom);
        $membre->setTaille($taille);
        $membre->setPoids($poids);
        $membre->setEmail($email);
        $membre->setTelephone($telephone);

        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $response = new JsonResponse();
        $response->setStatusCode(200);
        return $response;
    }


    /**
     * @Route("membre/getPasswordByEmail", name="app_password")
     */

    public function getPassswordByEmail(Request $request) {

        $email = $request->get('email');
        $user = $this->getDoctrine()->getManager()->getRepository(Membre::class)->findOneBy(['email'=>$email]);
        if($user) {
            $password = $user->getPassword();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);
            return new JsonResponse($formatted);
        }
        return new Response("user not found");




    }

}
