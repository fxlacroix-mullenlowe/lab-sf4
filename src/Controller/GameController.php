<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Game\Poker\Poker;
use App\Entity\Game\Poker\Player;

/**
 * @Route("/game", options={"expose" = true})
 */
class GameController
{
    /**
     * @Route("/", name="game")
     */
    public function poker(Environment $twig)
    {
        return new Response($twig->render('game/card/home.html.twig'));
    }

}
