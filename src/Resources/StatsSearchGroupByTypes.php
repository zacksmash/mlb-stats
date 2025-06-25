<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFilterLevel;

class StatsSearchGroupByTypes extends MlbStatsRequest
{
    use HasFilterLevel;

    protected string $endpoint = 'stats/search/groupByTypes';
}
