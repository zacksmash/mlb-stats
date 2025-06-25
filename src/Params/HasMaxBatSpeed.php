<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxBatSpeed
{
    protected $maxBatSpeed;

    /**
     * Maximum value to filter on
     */
    public function maxBatSpeed(float $maxBatSpeed)
    {
        $this->maxBatSpeed = (float) $maxBatSpeed;

        return $this;
    }
}
