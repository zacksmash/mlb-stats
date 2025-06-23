<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasEventTypes;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePks;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasOpponentId;
use Zacksmash\MlbStats\Params\HasScheduleTypes;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasVenueIds;

#[RequiresOneOf(['sportId', 'gamePks'])]
class Schedule extends MlbStatsRequest
{
    use HasDate;
    use HasDates;
    use HasEventTypes;
    use HasFields;
    use HasGamePks;
    use HasGameTypes;
    use HasHydrate;
    use HasLeagueId;
    use HasOpponentId;
    use HasScheduleTypes;
    use HasSportId;
    use HasTeamId;
    use HasVenueIds;

    protected string $endpoint = 'schedule';
}
