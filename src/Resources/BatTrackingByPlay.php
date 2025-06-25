<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class BatTrackingByPlay extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Primary Key Representing a Game
     * Unique play identifier
     */
    public function __construct(int|string $gamePk, string $playId)
    {
        $this->endpoint = "batTracking/game/$gamePk/$playId";
    }
}
