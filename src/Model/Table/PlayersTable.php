<?php

namespace App\Model\Table;

use App\Model\Entity\Player;
use App\Model\Table\Data\PlayerData;
use Cake\ORM\Table;

class PlayersTable extends Table
{
    public array $players;

    public function initialize(array $config): void
    {
        $this->players = PlayerData::fetch();
    }

    public function getAll(): array
    {
        $players = [];

        foreach ($this->players as $player) {
                        $players[$player['id']] = [
                'name' => $player->fullName(),
                'position' => $player['positionAbbr'],
            ];
        }

        return $players;
    }

    public function get(mixed $id, $finder = 'all', $cache = null, $cacheKey = null, ...$args): \Cake\Datasource\EntityInterface
    {
        return $this->players[$id];
    }
}
