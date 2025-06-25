<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinExitVelocity
{
    protected $minExitVelocity;

    /**
     * Minimum value to filter on
     */
    public function minExitVelocity(float $minExitVelocity)
    {
        $this->minExitVelocity = (float) $minExitVelocity;

        return $this;
    }
}
