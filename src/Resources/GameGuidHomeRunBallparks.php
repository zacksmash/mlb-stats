<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasIsHomeRunParks;

#[RequiresOneOf('isHomeRunParks')]
class GameGuidHomeRunBallparks extends MlbStatsRequest
{
    use HasFields;
    use HasIsHomeRunParks;

    /**
     * Unique Primary Key Representing a Game
     * Unique identifier for a play within a game
     */
    public function __construct(int|string $gamePk, string $guid)
    {
        $this->endpoint = "game/$gamePk/$guid/homeRunBallparks";
    }
}
