<?php

namespace Zacksmash\MlbStats\Params;

trait HasFirstBasemanIds
{
    protected $firstBasemanIds;

    /**
     * A unique identifier for a player
     */
    public function firstBasemanIds(mixed $args)
    {
        $firstBasemanIds = is_array($args) ? $args : func_get_args();

        $this->firstBasemanIds = implode(',', $firstBasemanIds);

        return $this;
    }
}
