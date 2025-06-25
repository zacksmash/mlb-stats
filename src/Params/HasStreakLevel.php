<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StreakLevels;

trait HasStreakLevel
{
    protected $streakLevel;

    /**
     * No Description Provided
     */
    public function streakLevel(StreakLevels|string $streakLevel)
    {
        $this->streakLevel = $streakLevel instanceof StreakLevels
            ? $streakLevel->value
            : $streakLevel;

        return $this;
    }

    /**
     * Set streakLevel to SEASON
     */
    public function seasonStreak()
    {
        return $this->streakLevel(StreakLevels::SEASON);
    }

    /**
     * Set streakLevel to GAME
     */
    public function gameStreak()
    {
        return $this->streakLevel(StreakLevels::GAME);
    }

    /**
     * Set streakLevel to AT_BAT
     */
    public function atBatStreak()
    {
        return $this->streakLevel(StreakLevels::AT_BAT);
    }

    /**
     * Set streakLevel to PITCH
     */
    public function pitchStreak()
    {
        return $this->streakLevel(StreakLevels::PITCH);
    }
}
