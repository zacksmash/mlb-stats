<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasHasStats;
use Zacksmash\MlbStats\Params\HasSeason;

class SportPlayers extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasGameType;
    use HasHasStats;
    use HasSeason;

    /**
     * Top level organization of a sport
     */
    public function __construct(int|string $sportId)
    {
        $this->endpoint = "sports/$sportId/players";
    }
}
