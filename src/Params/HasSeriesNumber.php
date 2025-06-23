<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeriesNumber
{
    protected $seriesNumber;

    public function seriesNumber(string|int $seriesNumber)
    {
        $this->seriesNumber = (string) $seriesNumber;

        return $this;
    }
}
