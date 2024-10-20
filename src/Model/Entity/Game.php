<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Game extends Entity
{
    public ?int $id = null;
    public ?int $week = null;
    public ?string $opponent = null;
    public ?bool $home = null;
    public ?int $pointsFor = null;
    public ?int $pointsAgainst = null;
    public array $divisionTeams = ['ARI', 'LAR', 'SEA'];

    public function __construct(array $properties)
    {
        foreach ($properties as $key => $value) {
            $this->set($key, $value);
            $this->completeValues();
        }
    }

    private function completeValues()
    {
        if (is_null($this['id'])) {
            $this->set('id', $this['week']);
        }

        if (is_null($this['opponent'])) {
            $this->set('opponent', $this->divisionTeams[rand(0, 2)]);
        }

        if (is_null($this['pointsFor'])) {
            $this->set('pointsFor', rand(0, 50));
        }

        if (is_null($this['pointsAgainst'])) {
            $this->set('pointsAgainst', rand(0, 50));
        }

        if (is_null($this['home'])) {
            $this->set('home', (bool)rand(0, 1));
        }
    }
}
