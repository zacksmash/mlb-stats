<?php

namespace Zacksmash\MlbStats\Params;

trait HasPlayerIds
{
    protected $playerIds;

    /**
     * A unique identifier for players
     */
    public function playerIds(mixed $args)
    {
        $playerIds = is_array($args) ? $args : func_get_args();

        $this->playerIds = implode(',', $playerIds);

        return $this;
    }
}
