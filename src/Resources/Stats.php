<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBatterId;
use Zacksmash\MlbStats\Params\HasBatterTeamId;
use Zacksmash\MlbStats\Params\HasCombineSits;
use Zacksmash\MlbStats\Params\HasDaysBack;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasExcludeTradedPlayers;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePk;
use Zacksmash\MlbStats\Params\HasGamesBack;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasMetrics;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasPersonId;
use Zacksmash\MlbStats\Params\HasPitcherId;
use Zacksmash\MlbStats\Params\HasPitcherTeamId;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresOneOf('stats', 'group')]
class Stats extends MlbStatsRequest
{
    use HasBatterId;
    use HasBatterTeamId;
    use HasCombineSits;
    use HasDaysBack;
    use HasEndDate;
    use HasExcludeTradedPlayers;
    use HasFields;
    use HasGamePk;
    use HasGamesBack;
    use HasGameType;
    use HasGroup;
    use HasLeagueId;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasLimit;
    use HasMetrics;
    use HasOffset;
    use HasOpposingTeamId;
    use HasOrder;
    use HasPersonId;
    use HasPitcherId;
    use HasPitcherTeamId;
    use HasPlayerPool;
    use HasPosition;
    use HasSeason;
    use HasSeasons;
    use HasSitCodes;
    use HasSortStat;
    use HasSportId;
    use HasSportIds;
    use HasStartDate;
    use HasStats;
    use HasTeamId;
    use HasTeamIds;

    protected string $endpoint = 'stats';
}
