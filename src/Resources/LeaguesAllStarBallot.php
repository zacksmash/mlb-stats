<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;

class LeaguesAllStarBallot extends MlbStatsRequest
{
    use HasFields;
    use HasLeagueId;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasSeason;
    use HasSeasons;
    use HasSportId;

    protected string $endpoint = 'leagues/allStarBallot';
}
