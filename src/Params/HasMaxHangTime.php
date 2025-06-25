<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxHangTime
{
    protected $maxHangTime;

    /**
     * Maximum value to filter on
     */
    public function maxHangTime(float $maxHangTime)
    {
        $this->maxHangTime = (float) $maxHangTime;

        return $this;
    }
}
