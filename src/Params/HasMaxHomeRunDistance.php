<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxHomeRunDistance
{
    protected $maxHomeRunDistance;

    /**
     * Maximum value to filter on
     */
    public function maxHomeRunDistance(float $maxHomeRunDistance)
    {
        $this->maxHomeRunDistance = (float) $maxHomeRunDistance;

        return $this;
    }
}
