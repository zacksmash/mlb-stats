<?php

namespace Zacksmash\MlbStats\Params;

trait HasPercentile
{
    protected $percentile;

    /**
     * Only return averages above this percentile. used for best effort plays
     */
    public function percentile(int|string $percentile)
    {
        $this->percentile = (string) $percentile;

        return $this;
    }
}
