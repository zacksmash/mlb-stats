<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinHangTime
{
    protected $minHangTime;

    /**
     * Minimum value to filter on
     */
    public function minHangTime(float $minHangTime)
    {
        $this->minHangTime = (float) $minHangTime;

        return $this;
    }
}
