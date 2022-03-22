<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        $name = "Tiburce";

        return $this->render('views/index.html.twig', [
            'name' => $name
        ]);
    }

   
    /**
     * @Route("/about", name="about")
     * @return Response
     */
    public function about(): Response
    {
        return $this->render('views/about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @return Response
     */
    public function contact(): Response
    {
        return $this->render('views/contact.html.twig');
    }

    /**
     * @Route("/register", name="register")
     * @return Response
     */
    public function register(): Response
    {
        return $this->render('views/register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     * @return Response
     */
    public function login(): Response
    {
        return $this->render('views/login.html.twig');
    }

}
