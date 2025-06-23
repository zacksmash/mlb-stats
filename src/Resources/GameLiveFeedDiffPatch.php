<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndTimecode;
use Zacksmash\MlbStats\Params\HasStartTimecode;

class GameLiveFeedDiffPatch extends MlbStatsRequest
{
    use HasEndTimecode;
    use HasStartTimecode;

    protected string $version = 'v1.1';

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/feed/live/diffPatch";
    }
}
