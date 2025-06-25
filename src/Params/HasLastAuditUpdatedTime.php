<?php

namespace Zacksmash\MlbStats\Params;

trait HasLastAuditUpdatedTime
{
    protected $lastAuditUpdatedTime;

    /**
     * Return data updated since a specified date. Format: YYYY-MM-DDTHH:MM:SSZ
     */
    public function lastAuditUpdatedTime(string $lastAuditUpdatedTime)
    {
        $this->lastAuditUpdatedTime = $lastAuditUpdatedTime;

        return $this;
    }
}
