<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBatSide;
use Zacksmash\MlbStats\Params\HasBatterId;
use Zacksmash\MlbStats\Params\HasBatterTeamId;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasDebug;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasEventType;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePk;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasHitTrajectory;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasMaxValue;
use Zacksmash\MlbStats\Params\HasMetrics;
use Zacksmash\MlbStats\Params\HasMinOccurrences;
use Zacksmash\MlbStats\Params\HasMinValue;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOpposingPlayerId;
use Zacksmash\MlbStats\Params\HasOpposingTeamId;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasPercentile;
use Zacksmash\MlbStats\Params\HasPersonId;
use Zacksmash\MlbStats\Params\HasPersonIds;
use Zacksmash\MlbStats\Params\HasPitcherId;
use Zacksmash\MlbStats\Params\HasPitcherTeamId;
use Zacksmash\MlbStats\Params\HasPitchHand;
use Zacksmash\MlbStats\Params\HasPitchType;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasVenueId;

#[RequiresOneOf('stats', 'metrics')]
class StatsMetrics extends MlbStatsRequest
{
    use HasBatSide;
    use HasBatterId;
    use HasBatterTeamId;
    use HasDate;
    use HasDebug;
    use HasEndDate;
    use HasEventType;
    use HasFields;
    use HasGamePk;
    use HasGameType;
    use HasGroup;
    use HasHitTrajectory;
    use HasLimit;
    use HasMaxValue;
    use HasMetrics;
    use HasMinOccurrences;
    use HasMinValue;
    use HasOffset;
    use HasOpposingPlayerId;
    use HasOpposingTeamId;
    use HasOrder;
    use HasPercentile;
    use HasPersonId;
    use HasPersonIds;
    use HasPitcherId;
    use HasPitcherTeamId;
    use HasPitchHand;
    use HasPitchType;
    use HasPosition;
    use HasSeason;
    use HasSeasons;
    use HasSportId;
    use HasStartDate;
    use HasStats;
    use HasTeamId;
    use HasVenueId;

    protected string $endpoint = 'stats/metrics';
}
