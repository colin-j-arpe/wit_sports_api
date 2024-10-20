<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\View\JsonView;

class PlayersController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function index()
    {
        $players = $this->fetchTable('Players')->getAll();
        $this->set('players', $players);
        $this->viewBuilder()->setOption('serialize', ['players']);
    }

    public function view($id)
    {
        $player = $this->fetchTable('Players')->get($id);
        $this->set('player', $player);
        $this->viewBuilder()->setOption('serialize', ['player']);
    }

    public function viewGame($week, $playerId)
    {
        $player = $this->fetchTable('Players')->get($playerId);
        $player->generateGameStats();
        $this->set('player', $player);
        $this->viewBuilder()->setOption('serialize', ['player']);
    }
}
