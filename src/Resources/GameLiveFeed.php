<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasTimecode;

class GameLiveFeed extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasTimecode;

    protected string $version = 'v1.1';

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/feed/live";
    }
}
