<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDaysBack;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasExpand;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamesBack;
use Zacksmash\MlbStats\Params\HasGroupBy;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeaderGameTypes;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasPlayerActive;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasStatType;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasTeamIds;

class StatsLeaders extends MlbStatsRequest
{
    use HasDaysBack;
    use HasEndDate;
    use HasExpand;
    use HasFields;
    use HasGamesBack;
    use HasGroupBy;
    use HasLeaderCategories;
    use HasLeaderGameTypes;
    use HasLeagueId;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasLimit;
    use HasOffset;
    use HasOpposingTeamId;
    use HasPlayerActive;
    use HasPlayerPool;
    use HasPosition;
    use HasSeason;
    use HasSitCodes;
    use HasSportId;
    use HasSportIds;
    use HasStartDate;
    use HasStatGroup;
    use HasStats;
    use HasStatType;
    use HasTeamId;
    use HasTeamIds;

    protected string $endpoint = 'stats/leaders';
}
