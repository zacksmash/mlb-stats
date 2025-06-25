<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinLaunchAngleAgainst
{
    protected $minLaunchAngleAgainst;

    /**
     * Minimum value to filter on
     */
    public function minLaunchAngleAgainst(float $minLaunchAngleAgainst)
    {
        $this->minLaunchAngleAgainst = (float) $minLaunchAngleAgainst;

        return $this;
    }
}
