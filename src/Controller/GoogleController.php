<?php

namespace App\Controller;

use App\Entity\Membre;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends AbstractController
{
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google/", name="connect_google_start")
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        // will redirect to google!
        return $clientRegistry
            ->getClient('google_connect') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect();
    }

    /**
     * After going to GOOGle, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/connect/google/check/", name="connect_google_check")
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry,SessionInterface $session)
    {
        /** @var \KnpU\OAuth2ClientBundle\Client\Provider\googleClient $client */
        $client = $clientRegistry->getClient('google_connect');

        try {
            /** @var \League\OAuth2\Client\Provider\googleUser $user */
            $user = $client->fetchUser();
            $googleuser=new Membre();
            $googleuser=$this->getDoctrine()->getRepository(Membre::class)->findOneBy(array('email'=>$user->getEmail()));
            if (is_null($googleuser)){
                return $this->render('user/message.html.twig',['message'=>'compte introuvable']);
            }
            else {


                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->flush();
                    $session->set('Membre', $googleuser);

                    return $this->redirectToRoute('home');

            }



        } catch (IdentityProviderException $e) {
            return $this->redirectToRoute('membre_new');
        }

    }
}