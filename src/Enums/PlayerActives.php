<?php

namespace Zacksmash\MlbStats\Enums;

enum PlayerActives: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case PENDING = 'PENDING';
    case BOTH = 'BOTH';

}
