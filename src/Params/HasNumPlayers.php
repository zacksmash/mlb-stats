<?php

namespace Zacksmash\MlbStats\Params;

trait HasNumPlayers
{
    protected $numPlayers;

    /**
     * Number of top player game scores to show. Default is 3.
     */
    public function numPlayers(int|string $numPlayers)
    {
        $this->numPlayers = (string) $numPlayers;

        return $this;
    }
}
