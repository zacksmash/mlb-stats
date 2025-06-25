<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGroup;

class PlayerGameStats extends MlbStatsRequest
{
    use HasFields;
    use HasGroup;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     * Unique Primary Key Representing a Game
     */
    public function __construct(int|string $personId, int|string $gamePk)
    {
        $this->endpoint = "people/$personId/stats/game/$gamePk";
    }
}
