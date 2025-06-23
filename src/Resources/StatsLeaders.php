<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeaderGameTypes;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStatType;

#[RequiresOneOf(['leaderCategories', 'season'])]
class StatsLeaders extends MlbStatsRequest
{
    use HasDates;
    use HasFields;
    use HasHydrate;
    use HasLeaderCategories;
    use HasLeaderGameTypes;
    use HasLeagueId;
    use HasLimit;
    use HasPlayerPool;
    use HasPosition;
    use HasSeason;
    use HasSitCodes;
    use HasSportId;
    use HasStatGroup;
    use HasStatType;

    protected string $endpoint = 'stats/leaders';
}
