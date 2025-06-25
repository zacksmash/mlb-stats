<?php

namespace Zacksmash\MlbStats\Params;

trait HasThirdBasemanIds
{
    protected $thirdBasemanIds;

    /**
     * A unique identifier for a player
     */
    public function thirdBasemanIds(mixed $args)
    {
        $thirdBasemanIds = is_array($args) ? $args : func_get_args();

        $this->thirdBasemanIds = implode(',', $thirdBasemanIds);

        return $this;
    }
}
