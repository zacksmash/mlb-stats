<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxLaunchAngleAgainst
{
    protected $maxLaunchAngleAgainst;

    /**
     * Maximum value to filter on
     */
    public function maxLaunchAngleAgainst(float $maxLaunchAngleAgainst)
    {
        $this->maxLaunchAngleAgainst = (float) $maxLaunchAngleAgainst;

        return $this;
    }
}
