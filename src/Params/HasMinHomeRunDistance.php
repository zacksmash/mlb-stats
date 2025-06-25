<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinHomeRunDistance
{
    protected $minHomeRunDistance;

    /**
     * Minimum value to filter on
     */
    public function minHomeRunDistance(float $minHomeRunDistance)
    {
        $this->minHomeRunDistance = (float) $minHomeRunDistance;

        return $this;
    }
}
