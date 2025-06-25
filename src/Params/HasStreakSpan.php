<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StreakSpans;

trait HasStreakSpan
{
    protected $streakSpan;

    /**
     * No Description Provided
     */
    public function streakSpan(StreakSpans|string $streakSpan)
    {
        $this->streakSpan = $streakSpan instanceof StreakSpans
            ? $streakSpan->value
            : $streakSpan;

        return $this;
    }

    /**
     * Set streakSpan to CAREER
     */
    public function careerLong()
    {
        return $this->streakSpan(StreakSpans::CAREER);
    }

    /**
     * Set streakSpan to SEASON
     */
    public function seasonLong()
    {
        return $this->streakSpan(StreakSpans::SEASON);
    }

    /**
     * Set streakSpan to ON_GOING
     */
    public function onGoing()
    {
        return $this->streakSpan(StreakSpans::ON_GOING);
    }

    /**
     * Set streakSpan to CURRENT_STREAK
     */
    public function currentStreak()
    {
        return $this->streakSpan(StreakSpans::CURRENT_STREAK);
    }

    /**
     * Set streakSpan to CURRENT_STREAK_IN_SEASON
     */
    public function currentStreakInSeason()
    {
        return $this->streakSpan(StreakSpans::CURRENT_STREAK_IN_SEASON);
    }

    /**
     * Set streakSpan to NOTABLE
     */
    public function notable()
    {
        return $this->streakSpan(StreakSpans::NOTABLE);
    }

    /**
     * Set streakSpan to NOTABLE_IN_SEASON
     */
    public function notableInSeason()
    {
        return $this->streakSpan(StreakSpans::NOTABLE_IN_SEASON);
    }
}
