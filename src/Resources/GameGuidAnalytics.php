<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;

class GameGuidAnalytics extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;

    public function __construct(int|string $gamePk, string $guid)
    {
        $this->endpoint = "game/{$gamePk}/{$guid}/analytics";
    }
}
