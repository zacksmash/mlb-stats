<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchHand
{
    protected $pitchHand;

    /**
     * Handedness of pitcher
     */
    public function pitchHand(string $pitchHand)
    {
        $this->pitchHand = $pitchHand;

        return $this;
    }
}
