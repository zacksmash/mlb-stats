<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasBatSide;
use Zacksmash\MlbStats\Params\HasCombineSits;
use Zacksmash\MlbStats\Params\HasDaysBack;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasEventType;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamesBack;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasGroupBy;
use Zacksmash\MlbStats\Params\HasHitTrajectory;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasMetrics;
use Zacksmash\MlbStats\Params\HasOpposingPlayerId;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasPitchType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSitCodes;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStats;

#[RequiresOneOf('stats')]
class PlayerStats extends MlbStatsRequest
{
    use HasAccent;
    use HasBatSide;
    use HasCombineSits;
    use HasDaysBack;
    use HasEndDate;
    use HasEventType;
    use HasFields;
    use HasGamesBack;
    use HasGameType;
    use HasGroup;
    use HasGroupBy;
    use HasHitTrajectory;
    use HasLeagueId;
    use HasLeagueListId;
    use HasLimit;
    use HasMetrics;
    use HasOpposingPlayerId;
    use HasOpposingTeamId;
    use HasPitchType;
    use HasSeason;
    use HasSeasons;
    use HasSitCodes;
    use HasSportId;
    use HasStartDate;
    use HasStats;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function __construct(int|string $personId)
    {
        $this->endpoint = "people/$personId/stats";
    }
}
