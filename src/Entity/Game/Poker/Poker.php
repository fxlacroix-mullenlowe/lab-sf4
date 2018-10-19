<?php

namespace App\Entity\Game\Poker;

use App\Entity\Game\Card\Card;

class Poker
{
    private $players;
    private $cards;
    private $arbitrator;

    public function __construct($players)
    {
        $this->players = $players;
        $this->cards = new Card();
        $this->cards
            ->generatePackage()
            ->mix()
            ->cut();
    }

    public function distribute()
    {
        $cardPerPlayer = 5;
        $nPlayer = count($this->players);
        $distributedCount = 0;

        while($distributedCount < $cardPerPlayer)
        {
            foreach($this->players as $player)
            {
                $player->addCards($this->catchNCard());
            }
            $distributedCount++;
        }

        return $this;
    }

    public function catchNCard($n = 1)
    {
        $cards = [];
        for($i = 0; $i < $n; $i++)
        {
            $cards[] = array_shift($this->cards->package);
        }

        return $cards;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

    /**
     * @return Card
     */
    public function getCards(): Card
    {
        return $this->cards;
    }

    /**
     * @param Card $cards
     */
    public function setCards(Card $cards)
    {
        $this->cards = $cards;
    }

    /**
     * @return mixed
     */
    public function getArbitrator()
    {
        return $this->arbitrator;
    }

    /**
     * @param mixed $arbitrator
     */
    public function setArbitrator($arbitrator): void
    {
        $this->arbitrator = $arbitrator;
    }

    public function arbitrate()
    {
        foreach($this->getPlayers() as $player){

            $cards = $player->getCards();

            // flush color
            $colors = $values = $split = $hasPaire = [];
            foreach($cards as $card) {
                $split = preg_split('/(\s*)-(\s*)/', $card);
                $colors[] = $split[0];
                $values[] = $split[1];
            }

            // $colors
            $isColor = false;
            if(count(array_unique($colors)) == 1){
                $isColor = true;
            }

            // square || third || paire
            $hasPaire = [];
            $hasThird = $hasSquare = false;
            $analysisValues = array_count_values($values);
            foreach($analysisValues as $analysisValue)
            {
                switch($analysisValue){
                    case 2: $hasPaire[] = true; break;
                    case 3: $hasThird   = true; break;
                    case 4: $hasSquare  = true; break;
                }
            }

            // possible flush
            $keys = array_keys($analysisValues);
            sort($keys);
            $isFlush = false;
            if(count($analysisValues) == 5)
            {
                if($keys[4] == $keys[3] + 1
                    && $keys[3] == $keys[2] + 1
                    && $keys[2] == $keys[1] + 1
                    && $keys[1] == $keys[0] + 1){
                    $isFlush = true;
                }
            }

            $isColorFlush = false;
            if($isFlush and $isColor)
            {
                $isColorFlush = true;
            }

            // deduction
            if($isColorFlush) {
                $player->setGame('Quinte Flush');
                $player->setGameValue(10);
            } elseif($hasSquare){
                $player->setGame('Carré');
            } elseif($isColor){
                $player->setGame('Couleur');
            } elseif($hasThird and count($hasPaire) == 1){
                $player->setGame('Fool');
            } elseif($isFlush){
                $player->setGame('Suite');
            } elseif($hasThird){
                $player->setGame('Brelan');
            } elseif(count($hasPaire) == 2){
                $player->setGame('Double Paire');
            } elseif(count($hasPaire) == 1){
                $player->setGame('Paire');
            } else {
                $player->setGame('Rien');
            }
        }

        return $this;
    }

    public function scoreIt()
    {

    }


}