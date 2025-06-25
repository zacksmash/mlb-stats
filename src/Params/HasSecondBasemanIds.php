<?php

namespace Zacksmash\MlbStats\Params;

trait HasSecondBasemanIds
{
    protected $secondBasemanIds;

    /**
     * A unique identifier for a player
     */
    public function secondBasemanIds(mixed $args)
    {
        $secondBasemanIds = is_array($args) ? $args : func_get_args();

        $this->secondBasemanIds = implode(',', $secondBasemanIds);

        return $this;
    }
}
