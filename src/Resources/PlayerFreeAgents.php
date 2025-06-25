<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf('season')]
class PlayerFreeAgents extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasOrder;
    use HasSeason;

    protected string $endpoint = 'people/freeAgents';
}
