<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StreakSpan;

trait HasStreakSpan
{
    protected $streakSpan;

    public function streakSpan(StreakSpan|string $streakSpan)
    {
        $this->streakSpan = $streakSpan instanceof StreakSpan
            ? $streakSpan->value
            : $streakSpan;

        return $this;
    }

    public function career()
    {
        return $this->streakSpan(StreakSpan::CAREER);
    }

    public function spanSeason()
    {
        return $this->streakSpan(StreakSpan::SEASON);
    }

    public function currentStreak()
    {
        return $this->streakSpan(StreakSpan::CURRENT_STREAK);
    }

    public function currentStreakInSeason()
    {
        return $this->streakSpan(StreakSpan::CURRENT_STREAK_IN_SEASON);
    }

    public function notable()
    {
        return $this->streakSpan(StreakSpan::NOTABLE);
    }

    public function notableInSeason()
    {
        return $this->streakSpan(StreakSpan::NOTABLE_IN_SEASON);
    }
}
