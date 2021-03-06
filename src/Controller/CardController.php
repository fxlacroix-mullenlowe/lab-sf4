<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Game\Poker\Poker;
use App\Entity\Game\Poker\Player;

/**
 * @Route("/card", options={"expose" = true})
 */
class CardController
{
    /**
     * @Route("/drag/easy", name="card_drag_easy")
     */
    public function dragEasy(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('game/card/drag_easy.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/drag/hard", name="card_drag_hard")
     */
    public function dragHard(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('game/card/drag_hard.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/check", name="card_check")
     */
    public function check(Environment $twig)
    {
        $players = [new Player(), new Player(), new Player(), new Player(), new Player()];
        $poker = new Poker($players);
        $poker->distribute()
              ->arbitrate();

        return new Response($twig->render('game/card/check.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/universe", name="card_universe")
     */
    public function universe(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('game/card/universe.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/", name="home_card")
     */
    public function poker(Environment $twig)
    {
        return new Response($twig->render('game/card/home.html.twig'));
    }

}
