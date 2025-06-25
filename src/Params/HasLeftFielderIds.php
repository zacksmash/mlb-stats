<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeftFielderIds
{
    protected $leftFielderIds;

    /**
     * A unique identifier for a player
     */
    public function leftFielderIds(mixed $args)
    {
        $leftFielderIds = is_array($args) ? $args : func_get_args();

        $this->leftFielderIds = implode(',', $leftFielderIds);

        return $this;
    }
}
