<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class GameGuidContextMetricsAverages extends MlbStatsRequest
{
    use HasFields;

    public function __construct(int|string $gamePk, string $guid)
    {
        $this->endpoint = "game/{$gamePk}/{$guid}/contextMetricsAverages";
    }
}
