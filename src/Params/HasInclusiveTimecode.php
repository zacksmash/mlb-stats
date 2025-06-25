<?php

namespace Zacksmash\MlbStats\Params;

trait HasInclusiveTimecode
{
    protected $inclusiveTimecode;

    /**
     * True to include plays that happen before or at the specified timecode
     */
    public function inclusiveTimecode(bool $inclusiveTimecode = true)
    {
        $this->inclusiveTimecode = $inclusiveTimecode;

        return $this;
    }
}
