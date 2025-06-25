<?php

namespace Zacksmash\MlbStats\Params;

trait HasCenterFielderIds
{
    protected $centerFielderIds;

    /**
     * A unique identifier for a player
     */
    public function centerFielderIds(mixed $args)
    {
        $centerFielderIds = is_array($args) ? $args : func_get_args();

        $this->centerFielderIds = implode(',', $centerFielderIds);

        return $this;
    }
}
