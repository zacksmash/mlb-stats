<?php

namespace Zacksmash\MlbStats\Params;

trait HasPlayerId
{
    protected $playerId;

    public function playerId(mixed $args)
    {
        $playerIds = is_array($args) ? $args : func_get_args();

        $this->playerId = implode(',', $playerIds);

        return $this;
    }
}
