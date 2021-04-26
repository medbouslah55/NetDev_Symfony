<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\MembreType;
use App\Form\PasswordbackupType;
use App\Form\PasswordkeyType;
use App\Repository\MembreRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/membre")
 */
class MembreController extends AbstractController
{

    /**
     *
     * @Route ("/loginadmin",name="loginadmin")
     */
    public function Loginadmin(Request $request)
    {
     $email=$request->get('_username');
     $pass=$request->get('_password');
     if(($email=="admin@admin.com")&&($pass=="admin"))
     {
         return $this->redirectToRoute('admin_index');
     }
     else
     {
         return $this->redirectToRoute('backend');
     }


    }

    /**
     *
     * @Route("/", name="membre_index", methods={"GET"})
     */
    public function index(Request $request ,PaginatorInterface $paginator): Response
    {
        $membres = $this->getDoctrine()
            ->getRepository(Membre::class)
            ->findAll();
        // Paginate the results of the query
        $membres= $paginator->paginate(
        // Doctrine Query, not results
            $membres,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );

        return $this->render('membre/index.html.twig', [
            'membres' => $membres,
        ]);
    }



    /**
     *
     * @Route ("/connexion",name="connexion")
     */
    public function Login()
    {

        return $this->render('LoginMembre.html.twig');
    }
    /**
     * @Route ("/deconnexion",name="deconnexion")
     */
    public function logout()
    {

    }

    /**
     * @Route("/editpassword", name="usereditpassword",)
     */
    public function editpassword(Request $request,SessionInterface $session): Response
    {
        if(is_null($session->get('cle'))||is_null($session->get('userbackup'))){
            return $this->redirectToRoute("user_password_backup");
        }
        $user=new Membre();
        $user=$this->getDoctrine()->getRepository(Membre::class)->find($session->get('userbackup')->getCin());
        $user->setPassword('');
        $passwordform=$this->createForm(MembreType::class,$user);
        $passwordform->add('Envoyer',SubmitType::class);
        $passwordform->handleRequest($request);
        if($passwordform->isSubmitted()){
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT, ['cost' => 12]));
            $this->getDoctrine()->getManager()->flush();
            $session->clear();
            return $this->redirectToRoute('membre_new');

        }
        return  $this->render('membre/passwordbackup.html.twig',['passwordbackupform'=>$passwordform->createView()]);

    }
    /**
     * @Route("/password_backup/key", name="user_password_backup_key",)
     */
    public function passwordbackupkey(MailerInterface $mailer,Request $request,SessionInterface $session): Response
    {
        if(is_null($session->get('cle'))||is_null($session->get('userbackup'))){
            return $this->redirectToRoute("user_password_backup");
        }
        $paswwordkey=$this->createForm(PasswordkeyType::class);
        $paswwordkey->add('Envoyer',SubmitType::class);
        $paswwordkey->handleRequest($request);
        if($paswwordkey->isSubmitted()){
            $secret_key=$session->get('cle');
            $key=$paswwordkey->get('cle')->getData();
            if($secret_key==$key){
                $this->addFlash('message','Changer votre mot de passe ');
                return $this->redirectToRoute('usereditpassword');
            }else{
                $this->addFlash('message','code de verification non valid');
            }
        }
        return  $this->render('membre/passwordbackup.html.twig',['keyform'=>$paswwordkey->createView()]);

    }

    /**
     * @Route("/password_backup", name="user_password_backup",)
     */
    public function passwordbackup(MailerInterface $mailer,Request $request,SessionInterface $session): Response
    {

        $form = $this->createForm(PasswordbackupType::class);
        $form->add('Envoyer',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $email=$form->get('email')->getData();
            $user=$this->getDoctrine()->getRepository(Membre::class)->findOneBy(['email'=>$email]);
            if(is_null($user)){
                $this->addFlash('message','Cette adresse e-mail est inconnue');
            }else{
                $cle =(bin2hex(random_bytes(3)));
                $session->set('cle',$cle);
                $session->set('userbackup',$user);
                $email=(new Email())
                    ->from('holidayhiat-security@gmail.com')
                    ->to($user->getEmail())
                    ->subject('code de verification')
                    ->text($cle);
                $mailer->send($email);
                $this->addFlash('message','un code de vérification vous vous être envoyé pour confirmer votre identité ');
                return $this->redirectToRoute('user_password_backup_key');

            }
        }
        return $this->render('membre/passwordbackup.html.twig',['passwordform'=>$form->createView()]);
    }
    /**
     * @param Request $request
     * @return Response
     * @Route("/search", name="search")
     *
     */
    public function search(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Membre::class);
        $requestString = $request->get('searchValue');
        $membre = $repository->findMembrebyName($requestString);

        return $this->render('membre/search.html.twig' ,[
            'membres' => $membre,
        ]);
    }
    /**
     * @Route("/new", name="membre_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $encoder): Response
    {
        $membre = new Membre();
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($membre,$membre->getPassword());
            $membre->setPassword($hash);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($membre);
            $entityManager->flush();

            return $this->redirectToRoute('connexion');
        }

        return $this->render('membre/new.html.twig', [
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="membre_show", methods={"GET"})
     */
    public function show(Membre $membre): Response
    {
        return $this->render('membre/show.html.twig', [
            'membre' => $membre,
        ]);
    }

    /**
     * @Route("/{cin}/edit", name="membre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Membre $membre,UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(MembreType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($membre,$membre->getPassword());
            $membre->setPassword($hash);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('membre/edit.html.twig', [
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}", name="membre_delete", methods={"POST"})
     */
    public function delete(Request $request, Membre $membre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$membre->getCin(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($membre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('membre_index');
    }

    /**
     * @Route("/test/chart", name="testChart")
     */
    public function pichart(MembreRepository $repo)
    {
        $pieChart = new PieChart();
        $membre = $repo->statistique();
        $data = array();
        foreach ($membre as $values)
        {
            $a =array($values['t'],intval($values['s']));
            array_push($data,$a);
        }
        $pieChart->getData()->setArrayToDataTable($a);

        $pieChart->getOptions()->setTitle('My Daily Activities');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render(
            'membre/pichart.html.twig', [
                'piechart' => $pieChart
            ]
        );
    }





}
