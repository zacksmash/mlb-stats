<?php

namespace Zacksmash\MlbStats\Params;

trait HasStreakThreshold
{
    protected $streakThreshold;

    /**
     * No Description Provided
     */
    public function streakThreshold(int|string $streakThreshold)
    {
        $this->streakThreshold = (string) $streakThreshold;

        return $this;
    }
}
