<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeriesNumber;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;

class SchedulePostseasonSeries extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;
    use HasSeriesNumber;
    use HasSportId;
    use HasTeamId;

    protected string $endpoint = 'schedule/postseason/series';
}
