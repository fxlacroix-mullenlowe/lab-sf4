<?php

namespace App\Entity\Game\Card;

class Card
{
    const MIN_CUT   = 1;
    const TOTAL     = 56;
    const COLORS    = ['spade', 'heart', 'diamond', 'club'];
    const VALUES    = [/*'1', */'2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
    public $package;

    public function generatePackage()
    {
        foreach(self::COLORS as $color)
        {
            foreach(self::VALUES as $value)
            {
                $this->package[] = sprintf('%s-%s', $color, $value);
            }
        }

        return $this;
    }

    public function mix()
    {
        shuffle($this->package);

        return $this;
    }

    public function cut()
    {
        $cutCard = rand(self::MIN_CUT, self::TOTAL);

        $cut1 = array_slice($this->package, 0, $cutCard);
        $cut2 = array_slice($this->package, $cutCard, self::TOTAL);

        $this->package = array_merge($cut2, $cut1);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param mixed $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }
    
}