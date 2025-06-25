<?php

namespace Zacksmash\MlbStats\Params;

trait HasLastPlayTime
{
    protected $lastPlayTime;

    /**
     * Returns all data that was created after the specified timestamp. Format: YYYY-MM-DDTHH:MM:SSZ
     */
    public function lastPlayTime(string $lastPlayTime)
    {
        $this->lastPlayTime = $lastPlayTime;

        return $this;
    }
}
