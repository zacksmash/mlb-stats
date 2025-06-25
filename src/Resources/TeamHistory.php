<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndSeason;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasStartSeason;
use Zacksmash\MlbStats\Params\HasTeamIds;

class TeamHistory extends MlbStatsRequest
{
    use HasEndSeason;
    use HasFields;
    use HasStartSeason;
    use HasTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/history";
    }
}
