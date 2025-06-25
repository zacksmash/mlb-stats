<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class WindDirection extends MlbStatsRequest
{
    use HasFields;

    protected string $endpoint = 'windDirection';
}
