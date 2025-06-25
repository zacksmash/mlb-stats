<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxHitDistance
{
    protected $maxHitDistance;

    /**
     * Maximum value to filter on
     */
    public function maxHitDistance(float $maxHitDistance)
    {
        $this->maxHitDistance = (float) $maxHitDistance;

        return $this;
    }
}
