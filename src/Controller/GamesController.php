<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\GamesTable;
use Cake\View\JsonView;

class GamesController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function index()
    {
        $gamesTable = new GamesTable();
        $games = $gamesTable->getAll();
        $this->set('games', $games);
        $this->viewBuilder()->setOption('serialize', ['games']);
    }

    public function view($week)
    {
        if (
            $week == GamesTable::BYE_WEEK
            || $week < 1
            || $week > 18
        ) {
            throw new \InvalidArgumentException('Invalid week');
        }

        $gamesTable = new GamesTable();
        $game = $gamesTable->get($week);
        $this->set('game', $game);
        $this->viewBuilder()->setOption('serialize', ['game']);
    }
}
