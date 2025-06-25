<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;

class GameLiveFeedTimestamps extends MlbStatsRequest
{
    protected string $version = 'v1.1';

    /**
     * Unique Primary Key Representing a Game
     */
    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/$gamePk/feed/live/timestamps";
    }
}
