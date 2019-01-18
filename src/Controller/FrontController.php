<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/front", options={"expose" = true})
 */
class FrontController
{
    /**
     * @Route("/jquery", name="front_react")
     */
    public function jquery(Environment $twig)
    {
        return new Response($twig->render('layout/jquery.html.twig'));
    }

    /**
      * @Route("/react", name="front_react")
      */
    public function react(Environment $twig)
    {
        return new Response($twig->render('layout/react.html.twig'));
    }

    /**
     * @Route("/vue", name="front_vue")
     * @Route("/vue/{route}", name="front_vue_router", requirements={"route"="^.+"})
     */
    public function vue(Environment $twig)
    {
        return new Response($twig->render('layout/vue.html.twig'));
    }

    /**
     * @Route("/vuesax", name="front_vuesax")
     */
    public function vuesax(Environment $twig)
    {
        return new Response($twig->render('layout/vuesax.html.twig'));
    }

    /**
     * @Route("/angular", name="front_angular")
     */
    public function angular(Environment $twig)
    {
        return new Response($twig->render('layout/angular.html.twig'));
    }
}