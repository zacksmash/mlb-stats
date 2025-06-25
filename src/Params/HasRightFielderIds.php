<?php

namespace Zacksmash\MlbStats\Params;

trait HasRightFielderIds
{
    protected $rightFielderIds;

    /**
     * A unique identifier for a player
     */
    public function rightFielderIds(mixed $args)
    {
        $rightFielderIds = is_array($args) ? $args : func_get_args();

        $this->rightFielderIds = implode(',', $rightFielderIds);

        return $this;
    }
}
