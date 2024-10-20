<?php

namespace App\Model\Entity;

class Quarterback extends Player
{
    use PasserTrait;
    use RusherTrait;

    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    public function generateGameStats()
    {
        $this->generatePassingStats();
        $this->generateRushingStats();
    }
}
