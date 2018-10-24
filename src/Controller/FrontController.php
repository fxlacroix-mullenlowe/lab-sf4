<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class FrontController
{
    /**
     * @Route("/front/jquery", name="front_react")
     */
    public function jquery(Environment $twig)
    {
        return new Response($twig->render('layout/jquery.html.twigy'));
    }

    /**
      * @Route("/front/react", name="front_react")
      */
    public function react(Environment $twig)
    {
        return new Response($twig->render('layout/react.html.twig'));
    }

    /**
     * @Route("/front/vue", name="front_vue")
     */
    public function vue(Environment $twig)
    {
        return new Response($twig->render('layout/vue.html.twig'));
    }

    /**
     * @Route("/front/angular", name="front_angular")
     */
    public function angular(Environment $twig)
    {
        return new Response($twig->render('layout/angular.html.twig'));
    }
}