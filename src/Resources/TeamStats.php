<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasGroupBy;
use Zacksmash\MlbStats\Params\HasOpposingPlayerId;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStats;

#[RequiresOneOf('group')]
class TeamStats extends MlbStatsRequest
{
    use HasEndDate;
    use HasFields;
    use HasGameType;
    use HasGroup;
    use HasGroupBy;
    use HasOpposingPlayerId;
    use HasOpposingTeamId;
    use HasOrder;
    use HasSeason;
    use HasSitCodes;
    use HasSortStat;
    use HasSportId;
    use HasStartDate;
    use HasStats;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/stats";
    }
}
