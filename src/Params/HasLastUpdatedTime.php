<?php

namespace Zacksmash\MlbStats\Params;

trait HasLastUpdatedTime
{
    protected $lastUpdatedTime;

    /**
     * Return data updated since a specified date. Format: YYYY-MM-DDTHH:MM:SSZ
     */
    public function lastUpdatedTime(string $lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;

        return $this;
    }
}
