<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasEventTypes;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasStatType;
use Zacksmash\MlbStats\Params\HasTeamId;

#[RequiresAllOf(['stats', 'group'])]
class Stats extends MlbStatsRequest
{
    use HasDates;
    use HasEventTypes;
    use HasFields;
    use HasGameType;
    use HasGroup;
    use HasHydrate;
    use HasLeagueId;
    use HasLimit;
    use HasOffset;
    use HasOrder;
    use HasPlayerPool;
    use HasPosition;
    use HasSeason;
    use HasSitCodes;
    use HasSortStat;
    use HasSportIds;
    use HasStats;
    use HasStatType;
    use HasTeamId;

    protected string $endpoint = 'stats';
}
