<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinSpinRate
{
    protected $minSpinRate;

    /**
     * Minimum value to filter on
     */
    public function minSpinRate(float $minSpinRate)
    {
        $this->minSpinRate = (float) $minSpinRate;

        return $this;
    }
}
