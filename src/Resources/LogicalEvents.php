<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class LogicalEvents extends MlbStatsRequest
{
    use HasFields;

    protected string $endpoint = 'logicalEvents';
}
