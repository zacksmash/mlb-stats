<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeason;

class LeagueAllStarBallot extends MlbStatsRequest
{
    use HasFields;
    use HasLeagueIds;
    use HasSeason;

    /**
     * Unique League Identifier
     */
    public function __construct(int|string $leagueId)
    {
        $this->endpoint = "leagues/$leagueId/allStarBallot";
    }
}
