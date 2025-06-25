<?php

namespace Zacksmash\MlbStats\Params;

trait HasGamesBack
{
    protected $gamesBack;

    /**
     * Returns results from the last 'X' games played.
     */
    public function gamesBack(int|string $gamesBack)
    {
        $this->gamesBack = (string) $gamesBack;

        return $this;
    }
}
