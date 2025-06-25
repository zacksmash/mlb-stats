<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinBatSpeed
{
    protected $minBatSpeed;

    /**
     * Minimum value to filter on
     */
    public function minBatSpeed(float $minBatSpeed)
    {
        $this->minBatSpeed = (float) $minBatSpeed;

        return $this;
    }
}
