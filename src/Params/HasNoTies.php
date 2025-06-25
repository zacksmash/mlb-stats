<?php

namespace Zacksmash\MlbStats\Params;

trait HasNoTies
{
    protected $noTies;

    /**
     * If set to false, will show all players tied for the last spot in the game scores list.
     */
    public function noTies(bool $noTies = true)
    {
        $this->noTies = $noTies;

        return $this;
    }
}
