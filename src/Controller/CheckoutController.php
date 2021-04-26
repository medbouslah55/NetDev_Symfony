<?php

namespace App\Controller;

use App\Repository\ActiviteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    /**
     * @Route("/checkout", name="checkout")
     */
    public function index(Request $request, Session $session): Response
    {
        // dd($request->query->get('nbPlace'));
        $nbPlace = $session->get('nbPlace');
        $price = $session->get('price');
        $nomAct = $session->get('nomAct') ;
        $total = $nbPlace * $price;

        require_once('C:\3A2\NetDev_Symfony\vendor\autoload.php');

        $prix = $total;

        /* on instancie stripe */
        \Stripe\Stripe::setApiKey('sk_test_51IZ0qiCipLoFwRXwy9T30p3t3SBRrrv6wNd3GfK0BPePWJgpQCiLGbmPM7PEnVR0phaM1popUkhHfSvWKOCUjNgs00Vc9cCjhb');

        $intent = \Stripe\PaymentIntent::create([
            'amount' => $prix * 100,
            'currency' => 'eur'
        ]);

        $sk = $intent['client_secret'];


        return $this->render('checkout/index.html.twig', [
            'total' => $total,
            'intent' => $intent,
            'sk' => $sk,

        ]);
    }

    /**
     * @Route("/check", name="check")
     */
    public function checkout(Session $session) {

        $nbPlace =  $session->get('nbPlace');
        $nomAct = $session->get('nomAct') ;
        $price =  $session->get('price');

        return $this->render('front/checkout/index.html.twig' , [
            'nbPlace' => $nbPlace,
            'nomAct' => $nomAct,
            'price' => $price,
        ]);
    }
}
