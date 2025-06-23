<?php

namespace Zacksmash\MlbStats\Enums;

enum StreakType: string
{
    case HITTING_STREAK_OVERALL = 'hittingStreakOverall';
    case HITTING_STREAK_HOME = 'hittingStreakHome';
    case HITTING_STREAK_AWAY = 'hittingStreakAway';
    case ON_BASE_OVERALL = 'onBaseOverall';
    case ON_BASE_HOME = 'onBaseHome';
    case ON_BASE_AWAY = 'onBaseAway';
}
