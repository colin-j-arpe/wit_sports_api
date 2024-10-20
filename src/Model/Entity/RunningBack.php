<?php

namespace App\Model\Entity;

class RunningBack extends Player
{
    use RusherTrait;
    use ReceiverTrait;

    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    public function generateGameStats()
    {
        $this->generateRushingStats();
        $this->generateReceivingStats();
    }
}
