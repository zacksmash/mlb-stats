<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherPosition
{
    protected $pitcherPosition;

    /**
     * Position abbreviation. Format: SS, P, 1B, etc
     */
    public function pitcherPosition(string $pitcherPosition)
    {
        $this->pitcherPosition = $pitcherPosition;

        return $this;
    }
}
