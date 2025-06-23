<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeaderGameTypes
{
    protected $leaderGameTypes;

    public function leaderGameTypes(mixed $args)
    {
        $leaderGameTypes = is_array($args) ? $args : func_get_args();

        $this->leaderGameTypes = implode(',', $leaderGameTypes);

        return $this;
    }
}
