<?php

namespace Zacksmash\MlbStats\Params;

trait HasPlayerId
{
    protected $playerId;

    /**
     * A unique identifier for a player
     */
    public function playerId(int|string $playerId)
    {
        $this->playerId = (string) $playerId;

        return $this;
    }
}
