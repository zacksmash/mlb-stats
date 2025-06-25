<?php

namespace Zacksmash\MlbStats\Enums;

enum StreakSpans: string
{
    case CAREER = 'CAREER';
    case SEASON = 'SEASON';
    case ON_GOING = 'ON_GOING';
    case CURRENT_STREAK = 'CURRENT_STREAK';
    case CURRENT_STREAK_IN_SEASON = 'CURRENT_STREAK_IN_SEASON';
    case NOTABLE = 'NOTABLE';
    case NOTABLE_IN_SEASON = 'NOTABLE_IN_SEASON';

}
