<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class ScheduleGamesTied extends MlbStatsRequest
{
    use HasGameTypes;
    use HasHydrate;
    use HasSeason;

    protected string $endpoint = 'schedule/games/tied';
}
