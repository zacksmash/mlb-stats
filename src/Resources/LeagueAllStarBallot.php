<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class LeagueAllStarBallot extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;

    public function __construct(int|string $leagueId)
    {
        $this->endpoint = "league/{$leagueId}/allStarBallot";
    }
}
