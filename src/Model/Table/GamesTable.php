<?php

namespace App\Model\Table;

use App\Model\Entity\Game;

class GamesTable
{
    public const int BYE_WEEK = 6;

    public function initialize(array $config): void
    {

    }

    public function getAll()
    {
        $games = [];
        for ($i = 1; $i <= 18; $i++) {
            if ($i === self::BYE_WEEK) {
                continue;
            }

            $games[] = new Game(['week' => $i]);
        }

        return $games;
    }

    public function get(mixed $id, $finder = 'all', $cache = null, $cacheKey = null, ...$args): \Cake\Datasource\EntityInterface
    {
        return new Game(['week' => $id]);
    }
}
