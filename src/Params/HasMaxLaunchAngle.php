<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxLaunchAngle
{
    protected $maxLaunchAngle;

    /**
     * Maximum value to filter on
     */
    public function maxLaunchAngle(float $maxLaunchAngle)
    {
        $this->maxLaunchAngle = (float) $maxLaunchAngle;

        return $this;
    }
}
