<?php

namespace App\Model\Entity;

trait ReceiverTrait
{
    public int $targets;
    public int $receptions;
    public int $receivingYards;
    public int $receivingTouchdowns;

    public function generateReceivingStats()
    {
        $this->targets = rand(5, 15);
        $this->receptions = rand(3, $this->targets);
        $this->receivingYards = $this->receptions * rand(5, 15);
        $this->receivingTouchdowns = floor($this->receptions/rand(5, 10));

        $this->set('targets', $this->targets);
        $this->set('receptions', $this->receptions);
        $this->set('receivingYards', $this->receivingYards);
        $this->set('receivingTouchdowns', $this->receivingTouchdowns);
    }
}
