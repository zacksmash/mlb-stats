<?php

namespace Zacksmash\MlbStats\Params;

trait HasLastMetricsUpdatedTime
{
    protected $lastMetricsUpdatedTime;

    /**
     * Return data updated since a specified date. Format: YYYY-MM-DDTHH:MM:SSZ
     */
    public function lastMetricsUpdatedTime(string $lastMetricsUpdatedTime)
    {
        $this->lastMetricsUpdatedTime = $lastMetricsUpdatedTime;

        return $this;
    }
}
