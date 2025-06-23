<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;

class SchedulePostseasonTuneIn extends MlbStatsRequest
{
    use HasHydrate;
    use HasSeason;
    use HasSportId;
    use HasTeamId;

    protected string $endpoint = 'schedule/postseason/tuneIn';
}
