<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasInclusiveTimecode;
use Zacksmash\MlbStats\Params\HasTimecode;

class GameLiveFeed extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasInclusiveTimecode;
    use HasTimecode;

    protected string $version = 'v1.1';

    /**
     * Unique Primary Key Representing a Game
     */
    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/$gamePk/feed/live";
    }
}
