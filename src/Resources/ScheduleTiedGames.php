<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

#[RequiresOneOf('season')]
class ScheduleTiedGames extends MlbStatsRequest
{
    use HasFields;
    use HasGameTypes;
    use HasSeason;
    use HasSportId;

    protected string $endpoint = 'schedule/games/tied';
}
