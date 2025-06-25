<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class GameTypes extends MlbStatsRequest
{
    use HasLeagueId;
    use HasSeason;
    use HasSportId;

    protected string $endpoint = 'gameTypes';
}
