<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class GameGuidAnalytics extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Primary Key Representing a Game
     * Unique identifier for a play within a game
     */
    public function __construct(int|string $gamePk, string $guid)
    {
        $this->endpoint = "game/$gamePk/$guid/analytics";
    }
}
