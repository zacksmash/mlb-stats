<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxExitVelocity
{
    protected $maxExitVelocity;

    /**
     * Maximum value to filter on
     */
    public function maxExitVelocity(float $maxExitVelocity)
    {
        $this->maxExitVelocity = (float) $maxExitVelocity;

        return $this;
    }
}
