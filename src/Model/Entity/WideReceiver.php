<?php

namespace App\Model\Entity;

class WideReceiver extends Player
{
    use ReceiverTrait;

    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    public function generateGameStats()
    {
        $this->generateReceivingStats();
    }
}
