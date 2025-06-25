<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinLaunchAngle
{
    protected $minLaunchAngle;

    /**
     * Minimum value to filter on
     */
    public function minLaunchAngle(float $minLaunchAngle)
    {
        $this->minLaunchAngle = (float) $minLaunchAngle;

        return $this;
    }
}
