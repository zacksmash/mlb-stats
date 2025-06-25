<?php

namespace Zacksmash\MlbStats\Params;

trait HasOpposingPlayerId
{
    protected $opposingPlayerId;

    /**
     * A unique identifier for the opposing team
     */
    public function opposingPlayerId(int|string $opposingPlayerId)
    {
        $this->opposingPlayerId = (string) $opposingPlayerId;

        return $this;
    }
}
