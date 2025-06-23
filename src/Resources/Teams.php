<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasAllStarStatuses;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportIds;

class Teams extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasAllStarStatuses;
    use HasFields;
    use HasGameType;
    use HasHydrate;
    use HasLeagueIds;
    use HasSeason;
    use HasSportIds;

    protected string $endpoint = 'teams';
}
