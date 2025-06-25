<?php

namespace Zacksmash\MlbStats\Params;

trait HasBisPlayerId
{
    protected $bisPlayerId;

    /**
     * A unique identifier for a player in the EBIS system
     */
    public function bisPlayerId(int|string $bisPlayerId)
    {
        $this->bisPlayerId = (string) $bisPlayerId;

        return $this;
    }
}
