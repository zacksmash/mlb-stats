<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeaderGameTypes;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresOneOf(['leaderCategories'])]
class TeamsStatsLeaders extends MlbStatsRequest
{
    use HasDates;
    use HasFields;
    use HasGameTypes;
    use HasHydrate;
    use HasLeaderCategories;
    use HasLeaderGameTypes;
    use HasLeagueIds;
    use HasLimit;
    use HasSeason;
    use HasSitCodes;
    use HasSportIds;
    use HasStatGroup;
    use HasTeamIds;

    protected string $endpoint = 'teams/stats/leaders';
}
