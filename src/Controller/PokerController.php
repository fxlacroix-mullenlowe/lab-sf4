<?php

namespace App\Controller;

use App\Entity\Analyzer;
use App\Entity\Poker\Player;
use App\Entity\Poker\Poker;
use App\Form\AnalyzerType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Consumer\DefinitionConsumer;
use Twig\Environment;

class PokerController
{
    /**
     * @Route("/poker/drag/easy", name="poker_drag_easy")
     */
    public function dragEasy(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('poker/drag_easy.html.twig', [
            'poker' =>  $poker
        ]));
    }
    /**
     * @Route("/poker/drag/hard", name="poker_drag_hard")
     */
    public function dragHard(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('poker/drag_hard.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/poker/check", name="poker_check")
     */
    public function check(Environment $twig)
    {
        $players = [new Player(), new Player(), new Player(), new Player(), new Player()];
        $poker = new Poker($players);
        $poker->distribute()
              ->arbitrate();

        return new Response($twig->render('poker/check.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/poker/universe", name="poker_universe")
     */
    public function universe(Environment $twig)
    {
        $players = [new Player(), new Player()];
        $poker = new Poker($players);

        return new Response($twig->render('poker/universe.html.twig', [
            'poker' =>  $poker
        ]));
    }

    /**
     * @Route("/poker", name="poker")
     */
    public function poker(Environment $twig)
    {
        return new Response($twig->render('poker/poker.html.twig'));
    }

}
