<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasHighlightLimit;

class GameContent extends MlbStatsRequest
{
    use HasHighlightLimit;

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/content";
    }
}
