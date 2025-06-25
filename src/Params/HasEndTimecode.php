<?php

namespace Zacksmash\MlbStats\Params;

trait HasEndTimecode
{
    protected $endTimecode;

    /**
     * End time code will give you a snapshot at that specific time. Format: MMDDYYYY_HHMMSS
     */
    public function endTimecode(string $endTimecode)
    {
        $this->endTimecode = $endTimecode;

        return $this;
    }
}
