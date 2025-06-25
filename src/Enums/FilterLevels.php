<?php

namespace Zacksmash\MlbStats\Enums;

enum FilterLevels: string
{
    case PITCH = 'PITCH';
    case AT_BAT = 'AT_BAT';
    case INNING = 'INNING';
    case PITCH_TYPE = 'PITCH_TYPE';
    case GAME = 'GAME';
    case SEASON = 'SEASON';
    case CAREER = 'CAREER';
    case NONE = 'NONE';

}
