<?php

namespace Zacksmash\MlbStats\Params;

trait HasAllStarStatuses
{
    protected $allStarStatuses;

    /**
     * No Description Provided
     */
    public function allStarStatuses(mixed $args)
    {
        $allStarStatuses = is_array($args) ? $args : func_get_args();

        $this->allStarStatuses = implode(',', $allStarStatuses);

        return $this;
    }
}
