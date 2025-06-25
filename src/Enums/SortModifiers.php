<?php

namespace Zacksmash\MlbStats\Enums;

enum SortModifiers: string
{
    case AVG = 'avg';
    case MAX = 'max';
    case MIN = 'min';
    case NUM = 'num';
    case P50 = 'p50';
    case P75 = 'p75';
    case P90 = 'p90';
    case COMP = 'comp';
    case NUM_COMP = 'num_comp';

}
