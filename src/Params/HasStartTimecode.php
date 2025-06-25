<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartTimecode
{
    protected $startTimecode;

    /**
     * Start time code will give you everything since that time. Format: MMDDYYYY_HHMMSS
     */
    public function startTimecode(string $startTimecode)
    {
        $this->startTimecode = $startTimecode;

        return $this;
    }
}
