<?php

namespace Zacksmash\MlbStats\Params;

trait HasCatcherIds
{
    protected $catcherIds;

    /**
     * A unique identifier for a player
     */
    public function catcherIds(mixed $args)
    {
        $catcherIds = is_array($args) ? $args : func_get_args();

        $this->catcherIds = implode(',', $catcherIds);

        return $this;
    }
}
