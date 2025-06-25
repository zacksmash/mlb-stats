<?php

namespace Zacksmash\MlbStats\Enums;

enum ActiveStatuses: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case BOTH = 'BOTH';

    // case ACTIVE = 'Y';
    // case INACTIVE = 'N';
    // case PENDING = 'P';
    // case ALL_TEAMS = 'B';

}
