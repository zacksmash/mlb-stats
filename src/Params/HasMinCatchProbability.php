<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinCatchProbability
{
    protected $minCatchProbability;

    /**
     * Minimum value to filter on
     */
    public function minCatchProbability(float $minCatchProbability)
    {
        $this->minCatchProbability = (float) $minCatchProbability;

        return $this;
    }
}
