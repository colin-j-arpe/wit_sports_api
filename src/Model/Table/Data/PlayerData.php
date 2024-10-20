<?php

namespace App\Model\Table\Data;

use App\Model\Entity\Quarterback;
use App\Model\Entity\RunningBack;
use App\Model\Entity\WideReceiver;
use App\Model\Entity\TightEnd;

class PlayerData
{
    public static function fetch(): array
    {
        return [
            'brock-purdy' => new Quarterback([
                'id' => 'brock-purdy',
                'firstName' => 'Brock',
                'lastName' => 'Purdy',
                'position' => 'Quarterback',
                'positionAbbr' => 'QB',
                'positionEntity' => 'Quarterback',
            ]),
            'christian-mccaffrey' => new RunningBack([
                'id' => 'christian-mccaffrey',
                'firstName' => 'Christian',
                'lastName' => 'McCaffrey',
                'position' => 'Running Back',
                'positionAbbr' => 'RB',
                'positionEntity' => 'RunningBack',
            ]),
            'kyle-juszczyk' => new RunningBack([
                'id' => 'kyle-juszczyk',
                'firstName' => 'Kyle',
                'lastName' => 'Juszczyk',
                'position' => 'Running Back',
                'positionAbbr' => 'RB',
                'positionEntity' => 'RunningBack',
            ]),
            'deebo-samuel' => new WideReceiver([
                'id' => 'deebo-samuel',
                'firstName' => 'Deebo',
                'lastName' => 'Samuel',
                'position' => 'Wide Receiver',
                'positionAbbr' => 'WR',
                'positionEntity' => 'WideReceiver',
            ]),
            'brandon-aiyuk' => new WideReceiver([
                'id' => 'brandon-aiyuk',
                'firstName' => 'Brandon',
                'lastName' => 'Aiyuk',
                'position' => 'Wide Receiver',
                'positionAbbr' => 'WR',
                'positionEntity' => 'WideReceiver',
            ]),
            'george-kittle' => new TightEnd([
                'id' => 'george-kittle',
                'firstName' => 'George',
                'lastName' => 'Kittle',
                'position' => 'Tight End',
                'positionAbbr' => 'TE',
                'positionEntity' => 'TightEnd',
            ]),
        ];
    }
}
