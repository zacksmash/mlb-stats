<?php

namespace Zacksmash\MlbStats\Params;

trait HasRound
{
    protected $round;

    public function round(string $round)
    {
        $this->round = $round;

        return $this;
    }
}
