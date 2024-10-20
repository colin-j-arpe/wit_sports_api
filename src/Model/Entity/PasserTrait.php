<?php

namespace App\Model\Entity;

trait PasserTrait
{
    public int $passAttempts;
    public int $completions;
    public int $passingYards;
    public int $passingTouchdowns;
    public int $interceptions;

    public function generatePassingStats()
    {
        $this->passAttempts = rand(20, 40);
        $this->completions = floor($this->passAttempts/rand(1.5, 2));
        $this->passingYards = $this->completions * rand(5, 15);
        $this->passingTouchdowns = floor($this->completions/rand(4, 6));
        $this->interceptions = floor($this->completions/rand(10, 20));

        $this->set('passAttempts', $this->passAttempts);
        $this->set('completions', $this->completions);
        $this->set('passingYards', $this->passingYards);
        $this->set('passingTouchdowns', $this->passingTouchdowns);
        $this->set('interceptions', $this->interceptions);
    }
}
