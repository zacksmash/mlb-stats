<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinExitVelocityAgainst
{
    protected $minExitVelocityAgainst;

    /**
     * Minimum value to filter on
     */
    public function minExitVelocityAgainst(float $minExitVelocityAgainst)
    {
        $this->minExitVelocityAgainst = (float) $minExitVelocityAgainst;

        return $this;
    }
}
