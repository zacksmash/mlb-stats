<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterIds
{
    protected $batterIds;

    /**
     * A unique identifier for a player
     */
    public function batterIds(mixed $args)
    {
        $batterIds = is_array($args) ? $args : func_get_args();

        $this->batterIds = implode(',', $batterIds);

        return $this;
    }
}
