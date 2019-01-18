<?php

namespace App\Controller;

use App\Entity\Game\Battle\Battle;
use App\Entity\Game\Card\Card;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/game/battle", options={"expose" = true}, name="game_battle")
 */
class BattleController
{
    /**
     * @Route("/", name="game_battle")
     */
    public function battle(Environment $twig)
    {
        $cards = new Card();
        $cards
            ->generatePackage()
            ->mix()
            ->cut();

        return new Response($twig->render('game/battle/battle.html.twig', [
            'cards' => $cards
        ]));
    }

}