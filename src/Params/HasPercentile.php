<?php

namespace Zacksmash\MlbStats\Params;

trait HasPercentile
{
    protected $percentile;

    public function percentile(int|float $percentile)
    {
        $this->percentile = $percentile;

        return $this;
    }
}
