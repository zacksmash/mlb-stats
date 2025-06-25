<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasExpand;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeaderGameTypes;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasSeason;

class TeamLeaders extends MlbStatsRequest
{
    use HasExpand;
    use HasFields;
    use HasLeaderCategories;
    use HasLeaderGameTypes;
    use HasLimit;
    use HasOffset;
    use HasPlayerPool;
    use HasSeason;

    /**
     * No Description Provided
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/leaders";
    }
}
