<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxHomeRunXBallparks
{
    protected $maxHomeRunXBallparks;

    /**
     * Maximum value to filter on
     */
    public function maxHomeRunXBallparks(float $maxHomeRunXBallparks)
    {
        $this->maxHomeRunXBallparks = (float) $maxHomeRunXBallparks;

        return $this;
    }
}
