<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinPitchSpeed
{
    protected $minPitchSpeed;

    /**
     * Minimum value to filter on
     */
    public function minPitchSpeed(float $minPitchSpeed)
    {
        $this->minPitchSpeed = (float) $minPitchSpeed;

        return $this;
    }
}
