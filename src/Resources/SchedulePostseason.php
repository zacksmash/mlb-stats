<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasPublicFacing;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeriesNumber;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasUseFeaturedGame;
use Zacksmash\MlbStats\Params\HasUseLatestGames;

class SchedulePostseason extends MlbStatsRequest
{
    use HasFields;
    use HasGameTypes;
    use HasPublicFacing;
    use HasSeason;
    use HasSeriesNumber;
    use HasSportId;
    use HasTeamId;
    use HasUseFeaturedGame;
    use HasUseLatestGames;

    protected string $endpoint = 'schedule/postseason';
}
