<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDaysBack;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasStatType;

class TeamsStatsLeaders extends MlbStatsRequest
{
    use HasDaysBack;
    use HasEndDate;
    use HasFields;
    use HasGameTypes;
    use HasGroup;
    use HasLeaderCategories;
    use HasLeagueId;
    use HasLeagueIds;
    use HasLimit;
    use HasOffset;
    use HasOpposingTeamId;
    use HasSeason;
    use HasSitCodes;
    use HasSportId;
    use HasSportIds;
    use HasStartDate;
    use HasStatGroup;
    use HasStats;
    use HasStatType;

    protected string $endpoint = 'teams/stats/leaders';
}
