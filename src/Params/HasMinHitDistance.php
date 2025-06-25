<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinHitDistance
{
    protected $minHitDistance;

    /**
     * Minimum value to filter on
     */
    public function minHitDistance(float $minHitDistance)
    {
        $this->minHitDistance = (float) $minHitDistance;

        return $this;
    }
}
