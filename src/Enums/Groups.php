<?php

namespace Zacksmash\MlbStats\Enums;

enum Groups: string
{
    case HITTING = 'HITTING';
    case PITCHING = 'PITCHING';
    case FIELDING = 'FIELDING';
    case CATCHING = 'CATCHING';
    case RUNNING = 'RUNNING';
    case GAME = 'GAME';
    case TEAM = 'TEAM';
    case STREAK = 'STREAK';

}
