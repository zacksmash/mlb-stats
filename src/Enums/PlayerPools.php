<?php

namespace Zacksmash\MlbStats\Enums;

enum PlayerPools: string
{
    case ALL = 'ALL';
    case QUALIFIED = 'QUALIFIED';
    case ROOKIES = 'ROOKIES';
    case QUALIFIED_ROOKIES = 'QUALIFIED_ROOKIES';
    case ORGANIZATION = 'ORGANIZATION';
    case ORGANIZATION_NO_MLB = 'ORGANIZATION_NO_MLB';
    case CURRENT = 'CURRENT';
    case ALL_CURRENT = 'ALL_CURRENT';
    case QUALIFIED_CURRENT = 'QUALIFIED_CURRENT';

}
