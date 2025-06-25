<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinHitProbability
{
    protected $minHitProbability;

    /**
     * Minimum value to filter on
     */
    public function minHitProbability(float $minHitProbability)
    {
        $this->minHitProbability = (float) $minHitProbability;

        return $this;
    }
}
