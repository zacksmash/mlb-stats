<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinHomeRunXBallparks
{
    protected $minHomeRunXBallparks;

    /**
     * Minimum value to filter on
     */
    public function minHomeRunXBallparks(float $minHomeRunXBallparks)
    {
        $this->minHomeRunXBallparks = (float) $minHomeRunXBallparks;

        return $this;
    }
}
