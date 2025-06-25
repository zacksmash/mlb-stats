<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxExitVelocityAgainst
{
    protected $maxExitVelocityAgainst;

    /**
     * Maximum value to filter on
     */
    public function maxExitVelocityAgainst(float $maxExitVelocityAgainst)
    {
        $this->maxExitVelocityAgainst = (float) $maxExitVelocityAgainst;

        return $this;
    }
}
