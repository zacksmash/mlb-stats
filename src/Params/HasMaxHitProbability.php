<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxHitProbability
{
    protected $maxHitProbability;

    /**
     * Maximum value to filter on
     */
    public function maxHitProbability(float $maxHitProbability)
    {
        $this->maxHitProbability = (float) $maxHitProbability;

        return $this;
    }
}
