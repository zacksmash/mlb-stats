<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinValue
{
    protected $minValue;

    /**
     * Minimum value to filter on
     */
    public function minValue(float $minValue)
    {
        $this->minValue = (float) $minValue;

        return $this;
    }
}
