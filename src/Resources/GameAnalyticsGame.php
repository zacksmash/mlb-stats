<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameModeId;
use Zacksmash\MlbStats\Params\HasIsNonStatcast;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasSortBy;
use Zacksmash\MlbStats\Params\HasTimecode;

class GameAnalyticsGame extends MlbStatsRequest
{
    use HasFields;
    use HasGameModeId;
    use HasIsNonStatcast;
    use HasLimit;
    use HasOffset;
    use HasSortBy;
    use HasTimecode;

    protected string $endpoint = 'game/analytics/game';
}
