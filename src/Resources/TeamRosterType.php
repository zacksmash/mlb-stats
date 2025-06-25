<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasSeason;

class TeamRosterType extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasGameType;
    use HasSeason;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     * Type of roster. Available types in /api/v1/rosterTypes
     */
    public function __construct(int|string $teamId, string $rosterType)
    {
        $this->endpoint = "teams/$teamId/roster/$rosterType";
    }
}
