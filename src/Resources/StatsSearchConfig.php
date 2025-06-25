<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFilterLevel;
use Zacksmash\MlbStats\Params\HasGroup;

class StatsSearchConfig extends MlbStatsRequest
{
    use HasFilterLevel;
    use HasGroup;

    protected string $endpoint = 'stats/search/config';
}
