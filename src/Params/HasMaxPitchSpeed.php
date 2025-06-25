<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxPitchSpeed
{
    protected $maxPitchSpeed;

    /**
     * Maximum value to filter on
     */
    public function maxPitchSpeed(float $maxPitchSpeed)
    {
        $this->maxPitchSpeed = (float) $maxPitchSpeed;

        return $this;
    }
}
