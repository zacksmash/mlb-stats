<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class GamePlayBiomechanics extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Primary Key Representing a Game
     * Unique play identifier
     * Position number. Format: 1, 2, 3, etc
     */
    public function __construct(int|string $gamePk, string $playId, int|string $positionId)
    {
        $this->endpoint = "game/$gamePk/$playId/analytics/biomechanics/$positionId";
    }
}
