<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresAllOf(['season', 'statGroup'])]
class TeamsStats extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasLeagueIds;
    use HasSeason;
    use HasSportIds;
    use HasStatGroup;
    use HasStats;
    use HasTeamIds;

    protected string $endpoint = 'teams/stats';
}
