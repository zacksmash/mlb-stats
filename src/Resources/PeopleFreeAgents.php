<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class PeopleFreeAgents extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasOrder;
    use HasSeason;

    protected string $endpoint = 'people/freeAgents';
}
