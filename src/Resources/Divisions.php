<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDivisionId;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSportId;

class Divisions extends MlbStatsRequest
{
    use HasDivisionId, HasLeagueId, HasSportId;

    protected string $endpoint = 'divisions';
}
