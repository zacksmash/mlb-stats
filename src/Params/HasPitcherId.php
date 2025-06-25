<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherId
{
    protected $pitcherId;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function pitcherId(int|string $pitcherId)
    {
        $this->pitcherId = (string) $pitcherId;

        return $this;
    }
}
