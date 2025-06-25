<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeriesNumber;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasUseFeaturedGame;
use Zacksmash\MlbStats\Params\HasUseLatestGames;

class SchedulePostseasonSeries extends MlbStatsRequest
{
    use HasDate;
    use HasEndDate;
    use HasFields;
    use HasGameTypes;
    use HasSeason;
    use HasSeriesNumber;
    use HasSportId;
    use HasStartDate;
    use HasTeamId;
    use HasUseFeaturedGame;
    use HasUseLatestGames;

    protected string $endpoint = 'schedule/postseason/series';
}
