<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeriesNumber
{
    protected $seriesNumber;

    /**
     * No Description Provided
     */
    public function seriesNumber(int|string $seriesNumber)
    {
        $this->seriesNumber = (string) $seriesNumber;

        return $this;
    }
}
