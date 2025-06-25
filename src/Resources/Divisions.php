<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasIncludeInactive;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class Divisions extends MlbStatsRequest
{
    use HasFields;
    use HasIncludeInactive;
    use HasLeagueId;
    use HasSeason;
    use HasSportId;

    protected string $endpoint = 'divisions';
}
