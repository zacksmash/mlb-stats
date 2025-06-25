<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamIds;

class TeamAffiliates extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasSeason;
    use HasSportId;
    use HasTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/affiliates";
    }
}
