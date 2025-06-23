<?php

namespace Zacksmash\MlbStats\Resources\Config;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class GameTypes extends MlbStatsRequest
{
    use HasSeason, HasSportId;

    protected string $endpoint = 'gameTypes';
}
