<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxSpinRate
{
    protected $maxSpinRate;

    /**
     * Maximum value to filter on
     */
    public function maxSpinRate(float $maxSpinRate)
    {
        $this->maxSpinRate = (float) $maxSpinRate;

        return $this;
    }
}
