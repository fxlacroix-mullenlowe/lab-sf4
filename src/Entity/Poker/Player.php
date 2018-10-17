<?php


namespace App\Entity\Poker;


class Player
{
    private $username;
    public $cards = [];
    public $game = '';

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     */
    public function setCards($cards): void
    {
        $this->cards = $cards;
    }

    /**
     * @param mixed $cards
     */
    public function addCards($cards)
    {
        if(is_array($cards))
        {
            $this->cards = array_merge($this->cards, $cards);
        }else{
            $this->cards[] = $cards;
        }

    }

    /**
     * @return string
     */
    public function getGame(): string
    {
        return $this->game;
    }

    /**
     * @param string $game
     */
    public function setGame(string $game): void
    {
        $this->game = $game;
    }
}