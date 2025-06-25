<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFilterLevel;

class StatsSearch extends MlbStatsRequest
{
    use HasFilterLevel;

    protected string $endpoint = 'stats/search/stats';
}
