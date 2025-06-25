<?php

namespace Zacksmash\MlbStats\Params;

trait HasActiveStreak
{
    protected $activeStreak;

    /**
     * Whether or not a player is active
     */
    public function activeStreak(bool $activeStreak = true)
    {
        $this->activeStreak = $activeStreak;

        return $this;
    }
}
