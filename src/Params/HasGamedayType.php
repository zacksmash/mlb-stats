<?php

namespace Zacksmash\MlbStats\Params;

trait HasGamedayType
{
    protected $gamedayType;

    /**
     * Indicates the level of Gameday (tracking, play-by-play, linescore, etc...)
     */
    public function gamedayType(string $gamedayType)
    {
        $this->gamedayType = $gamedayType;

        return $this;
    }
}
