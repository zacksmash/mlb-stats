<?php

namespace Zacksmash\MlbStats\Enums;

enum SortFields: string
{
    case STANDARD = 'STANDARD';
    case ADVANCED = 'ADVANCED';
    case TRACKING = 'TRACKING';
    case EXPECTED = 'EXPECTED';
    case SABERMETRICS = 'SABERMETRICS';
    case RANKING = 'RANKING';
    case PERCENTILE = 'PERCENTILE';

}
