<?php

namespace App\Model\Entity;

class TightEnd extends Player
{
    use ReceiverTrait;

    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
        $this->generateReceivingStats();
    }

    public function generateGameStats()
    {
        $this->generateReceivingStats();
    }
}
