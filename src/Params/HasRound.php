<?php

namespace Zacksmash\MlbStats\Params;

trait HasRound
{
    protected $round;

    /**
     * Round in which a player was drafted
     */
    public function round(string $round)
    {
        $this->round = $round;

        return $this;
    }
}
