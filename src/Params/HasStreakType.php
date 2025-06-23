<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StreakType;

trait HasStreakType
{
    protected $streakType;

    public function streakType(StreakType|string $streakType)
    {
        $this->streakType = $streakType instanceof StreakType
            ? $streakType->value
            : $streakType;

        return $this;
    }

    public function hittingStreakOverall()
    {
        return $this->streakType(StreakType::HITTING_STREAK_OVERALL);
    }

    public function hittingStreakHome()
    {
        return $this->streakType(StreakType::HITTING_STREAK_HOME);
    }

    public function hittingStreakAway()
    {
        return $this->streakType(StreakType::HITTING_STREAK_AWAY);
    }

    public function onBaseOverall()
    {
        return $this->streakType(StreakType::ON_BASE_OVERALL);
    }

    public function onBaseHome()
    {
        return $this->streakType(StreakType::ON_BASE_HOME);
    }

    public function onBaseAway()
    {
        return $this->streakType(StreakType::ON_BASE_AWAY);
    }
}
