<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxValue
{
    protected $maxValue;

    /**
     * Maximum value to filter on
     */
    public function maxValue(float $maxValue)
    {
        $this->maxValue = (float) $maxValue;

        return $this;
    }
}
