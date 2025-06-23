<?php

namespace Zacksmash\MlbStats\Params;

trait HasTimecode
{
    protected $timecode;

    public function timecode(string $timecode)
    {
        $this->timecode = $timecode;

        return $this;
    }
}
