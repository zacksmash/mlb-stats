<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

class LeagueAllStarFinalVote extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;

    /**
     * Unique League Identifier
     */
    public function __construct(int|string $leagueId)
    {
        $this->endpoint = "leagues/$leagueId/allStarFinalVote";
    }
}
