<?php

namespace Zacksmash\MlbStats\Params;

trait HasLastVideoUpdatedTime
{
    protected $lastVideoUpdatedTime;

    /**
     * The last time SportyBot video was updated
     */
    public function lastVideoUpdatedTime(string $lastVideoUpdatedTime)
    {
        $this->lastVideoUpdatedTime = $lastVideoUpdatedTime;

        return $this;
    }
}
