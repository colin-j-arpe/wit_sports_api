<?php

namespace App\Model\Entity;

trait RusherTrait
{
    public int $rushAttempts;
    public int $rushingYards;
    public int $rushingTouchdowns;
    public int $fumbles;

    public function generateRushingStats()
    {
        $this->rushAttempts = rand(10, 20);
        $this->rushingYards = $this->rushAttempts * rand(3, 6);
        $this->rushingTouchdowns = floor($this->rushAttempts/rand(10, 20));
        $this->fumbles = floor($this->rushAttempts/rand(20, 30));

        $this->set('rushAttempts', $this->rushAttempts);
        $this->set('rushingYards', $this->rushingYards);
        $this->set('rushingTouchdowns', $this->rushingTouchdowns);
        $this->set('fumbles', $this->fumbles);
    }
}
