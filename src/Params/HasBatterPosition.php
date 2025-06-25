<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterPosition
{
    protected $batterPosition;

    /**
     * Position abbreviation. Format: SS, P, 1B, etc
     */
    public function batterPosition(string $batterPosition)
    {
        $this->batterPosition = $batterPosition;

        return $this;
    }
}
