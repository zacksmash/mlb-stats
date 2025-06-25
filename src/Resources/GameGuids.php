<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameModeId;
use Zacksmash\MlbStats\Params\HasHasUpdates;
use Zacksmash\MlbStats\Params\HasIsHit;
use Zacksmash\MlbStats\Params\HasIsPickoff;
use Zacksmash\MlbStats\Params\HasIsPitch;
use Zacksmash\MlbStats\Params\HasLastAuditUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastMetricsUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastPlayTime;
use Zacksmash\MlbStats\Params\HasLastUpdatedTime;
use Zacksmash\MlbStats\Params\HasLastVideoUpdatedTime;
use Zacksmash\MlbStats\Params\HasSince;
use Zacksmash\MlbStats\Params\HasUpdatedSince;

class GameGuids extends MlbStatsRequest
{
    use HasFields;
    use HasGameModeId;
    use HasHasUpdates;
    use HasIsHit;
    use HasIsPickoff;
    use HasIsPitch;
    use HasLastAuditUpdatedTime;
    use HasLastMetricsUpdatedTime;
    use HasLastPlayTime;
    use HasLastUpdatedTime;
    use HasLastVideoUpdatedTime;
    use HasSince;
    use HasUpdatedSince;

    /**
     * Unique Primary Key Representing a Game
     */
    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/$gamePk/guids";
    }
}
