<?php

namespace Zacksmash\MlbStats\Params;

trait HasEndTimecode
{
    protected $endTimecode;

    public function endTimecode(string $endTimecode)
    {
        $this->endTimecode = $endTimecode;

        return $this;
    }
}
