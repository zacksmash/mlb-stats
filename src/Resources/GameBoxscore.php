<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasTimecode;

class GameBoxscore extends MlbStatsRequest
{
    use HasFields;
    use HasTimecode;

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/boxscore";
    }
}
