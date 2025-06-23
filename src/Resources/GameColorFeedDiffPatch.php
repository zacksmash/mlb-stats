<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndTimecode;
use Zacksmash\MlbStats\Params\HasStartTimecode;

class GameColorFeedDiffPatch extends MlbStatsRequest
{
    use HasEndTimecode;
    use HasStartTimecode;

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/feed/color/diffPatch";
    }
}
