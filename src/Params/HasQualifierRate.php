<?php

namespace Zacksmash\MlbStats\Params;

trait HasQualifierRate
{
    protected $qualifierRate;

    /**
     * Minimum occurrences to filter upon
     */
    public function qualifierRate(float $qualifierRate)
    {
        $this->qualifierRate = (float) $qualifierRate;

        return $this;
    }
}
