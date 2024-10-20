<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Player extends Entity
{
    public ?string $id = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $position = null;
    public ?string $positionAbbr = null;
    public ?string $positionEntity = null;

    public function __construct(array $properties)
    {
        foreach ($properties as $key => $value) {
            $this->set($key, $value);
        }
    }

    public function fullName()
    {
echo $this->firstName . "\n";
        return $this['firstName'] . ' ' . $this['lastName'];
    }
}
