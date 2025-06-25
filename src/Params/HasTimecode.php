<?php

namespace Zacksmash\MlbStats\Params;

trait HasTimecode
{
    protected $timecode;

    /**
     * Use this parameter to return a snapshot of the data at the specified time. Format: YYYYMMDD_HHMMSS
     */
    public function timecode(string $timecode)
    {
        $this->timecode = $timecode;

        return $this;
    }
}
