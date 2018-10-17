<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController
{
    /**
      * @Route("/")
      */
    public function home(Environment $twig)
    {
        return new Response($twig->render('home.html.twig'));
    }
}