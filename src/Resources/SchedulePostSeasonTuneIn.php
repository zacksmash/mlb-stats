<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;

class SchedulePostSeasonTuneIn extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;
    use HasSportId;
    use HasTeamId;

    protected string $endpoint = 'schedule/postseason/tuneIn';
}
