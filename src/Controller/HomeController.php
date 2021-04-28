<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//chatbot
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
* @Route("/message", name="message")
*/
function messageAction(Request $request)
{
    DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

    // Configuration for the BotMan WebDriver
    $config = [];

    // Create BotMan instance
    $botman = BotManFactory::create($config);

    // Give the bot some things to listen for.
    $botman->hears('(salut|coucou|bonjour)', function (BotMan $bot) {
        $bot->reply('salut!');
    });
    $botman->hears('(ca va?|ça va?)', function (BotMan $bot) {
        $bot->reply('ça va et vous ?');
    });
    $botman->hears('(bien|super)', function (BotMan $bot) {
        $bot->reply('cool');
    });
    $botman->hears('(les centres|centre|centres)', function (BotMan $bot) {
        $bot->reply('pour découvrir nos centre il suffit de vister cette page http://127.0.0.1:8000/centre/listeCentres !');
    });
    $botman->hears('(les activités|activité|activités)', function (BotMan $bot) {
        $bot->reply('pour découvrir nos activité il suffit de vister cette page http://127.0.0.1:8000/centre/listeCentres !');
    });
    // Set a fallback
    $botman->fallback(function (BotMan $bot) {
        $bot->reply('j\'ai pas compris, désolé!');
    });

    // Start listening
    $botman->listen();

        return new Response();
    }

    /**
     * @Route("/hello", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('home/chat.html.twig');
    }

    /**
     * @Route("/chatframe", name="chatframe")
     */
    public function chatframeAction(Request $request)
    {
        return $this->render('home/chatframe.html.twig');
    }

}
