<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeriesNumber;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;

class SchedulePostseason extends MlbStatsRequest
{
    use HasFields;
    use HasGameTypes;
    use HasHydrate;
    use HasSeason;
    use HasSeriesNumber;
    use HasSportId;
    use HasTeamId;

    protected string $endpoint = 'schedule/postseason';
}
