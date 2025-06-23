<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;

class GameColorFeedTimestamps extends MlbStatsRequest
{
    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/feed/color/timestamps";
    }
}
