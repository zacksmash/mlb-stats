<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasCalendarTypes;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasEventIds;
use Zacksmash\MlbStats\Params\HasEventTypes;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePk;
use Zacksmash\MlbStats\Params\HasGamePks;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasOpponentId;
use Zacksmash\MlbStats\Params\HasPerformerIds;
use Zacksmash\MlbStats\Params\HasPublicFacing;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasTimecode;
use Zacksmash\MlbStats\Params\HasUseLatestGames;
use Zacksmash\MlbStats\Params\HasVenueIds;

class ScheduleTrackingEvents extends MlbStatsRequest
{
    use HasCalendarTypes;
    use HasDate;
    use HasEndDate;
    use HasEventIds;
    use HasEventTypes;
    use HasFields;
    use HasGamePk;
    use HasGamePks;
    use HasGameType;
    use HasGameTypes;
    use HasLeagueId;
    use HasOpponentId;
    use HasPerformerIds;
    use HasPublicFacing;
    use HasSeason;
    use HasSeasons;
    use HasSportId;
    use HasStartDate;
    use HasTeamId;
    use HasTimecode;
    use HasUseLatestGames;
    use HasVenueIds;

    protected string $endpoint = 'schedule/trackingEvents';
}
