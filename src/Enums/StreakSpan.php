<?php

namespace Zacksmash\MlbStats\Enums;

enum StreakSpan: string
{
    case CAREER = 'career';
    case SEASON = 'season';
    case CURRENT_STREAK = 'currentStreak';
    case CURRENT_STREAK_IN_SEASON = 'currentStreakInSeason';
    case NOTABLE = 'notable';
    case NOTABLE_IN_SEASON = 'notableInSeason';
}
