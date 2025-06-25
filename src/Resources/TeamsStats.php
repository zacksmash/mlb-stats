<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasCombineSits;
use Zacksmash\MlbStats\Params\HasDaysBack;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStats;

#[RequiresOneOf('group')]
class TeamsStats extends MlbStatsRequest
{
    use HasCombineSits;
    use HasDaysBack;
    use HasEndDate;
    use HasFields;
    use HasGameType;
    use HasGroup;
    use HasLeagueIds;
    use HasLimit;
    use HasOffset;
    use HasOpposingTeamId;
    use HasOrder;
    use HasSeason;
    use HasSitCodes;
    use HasSortStat;
    use HasSportId;
    use HasSportIds;
    use HasStartDate;
    use HasStats;

    protected string $endpoint = 'teams/stats';
}
