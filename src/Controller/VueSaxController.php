<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

/**
 * @Route("/vuesax", options={"expose" = true })
 */
class VueSaxController
{

    /**
     * @Route("/home", name="vuesax_home")
     */
    public function home(UrlGeneratorInterface $router, Environment $twig)
    {
        sleep(1);
        return new JsonResponse([
            'content'   =>  $twig->render("vue/home.html.twig")
        ]);
    }

    /**
     * @Route("/menu", name="vuesax_menu")
     */
    public function menu(UrlGeneratorInterface $router)
    {
        sleep(1);
        return new JsonResponse([
            'brand'     => 'vue',
            'links'     => [
                'games' => $router->generate("game")
            ]
        ]);
    }

}