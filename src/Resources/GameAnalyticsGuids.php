<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameDate;
use Zacksmash\MlbStats\Params\HasGamedayType;
use Zacksmash\MlbStats\Params\HasGameModeId;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasHasUpdates;
use Zacksmash\MlbStats\Params\HasIsHit;
use Zacksmash\MlbStats\Params\HasIsNonStatcast;
use Zacksmash\MlbStats\Params\HasIsPickoff;
use Zacksmash\MlbStats\Params\HasIsPitch;
use Zacksmash\MlbStats\Params\HasLastAuditUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastMetricsUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastPlayTime;
use Zacksmash\MlbStats\Params\HasLastUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastVideoUpdatedTime;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSortBy;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTrackingSystemOwner;

class GameAnalyticsGuids extends MlbStatsRequest
{
    use HasFields;
    use HasGameDate;
    use HasGamedayType;
    use HasGameModeId;
    use HasGameType;
    use HasHasUpdates;
    use HasIsHit;
    use HasIsNonStatcast;
    use HasIsPickoff;
    use HasIsPitch;
    use HasLastAuditUpdatedTime;
    use HasLastMetricsUpdatedTime;
    use HasLastPlayTime;
    use HasLastUpdatedTime;
    use HasLastVideoUpdatedTime;
    use HasLimit;
    use HasOffset;
    use HasSeason;
    use HasSortBy;
    use HasSportId;
    use HasTrackingSystemOwner;

    protected string $endpoint = 'analytics/guids';
}
