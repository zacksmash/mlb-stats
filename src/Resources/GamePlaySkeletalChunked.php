<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasFileName;

#[RequiresOneOf('fileName')]
class GamePlaySkeletalChunked extends MlbStatsRequest
{
    use HasFields;
    use HasFileName;

    /**
     * Unique Primary Key Representing a Game
     * Unique play identifier
     */
    public function __construct(int|string $gamePk, string $playId)
    {
        $this->endpoint = "game/$gamePk/$playId/analytics/skeletalData/chunked";
    }
}
