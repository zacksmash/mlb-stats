<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartTimecode
{
    protected $startTimecode;

    public function startTimecode(string $startTimecode)
    {
        $this->startTimecode = $startTimecode;

        return $this;
    }
}
