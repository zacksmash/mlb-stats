<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxCatchProbability
{
    protected $maxCatchProbability;

    /**
     * Maximum value to filter on
     */
    public function maxCatchProbability(float $maxCatchProbability)
    {
        $this->maxCatchProbability = (float) $maxCatchProbability;

        return $this;
    }
}
