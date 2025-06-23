<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasMetrics;
use Zacksmash\MlbStats\Params\HasMinOccurrences;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasPercentile;
use Zacksmash\MlbStats\Params\HasPersonId;
use Zacksmash\MlbStats\Params\HasPlayerPool;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStats;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasVenueId;

#[RequiresAllOf(['stats', 'group', 'season'])]
class StatsMetrics extends MlbStatsRequest
{
    use HasDates;
    use HasFields;
    use HasGameType;
    use HasGroup;
    use HasHydrate;
    use HasLeagueId;
    use HasLimit;
    use HasMetrics;
    use HasMinOccurrences;
    use HasOffset;
    use HasPercentile;
    use HasPersonId;
    use HasPlayerPool;
    use HasSeason;
    use HasSportId;
    use HasStats;
    use HasTeamId;
    use HasVenueId;

    protected string $endpoint = 'stats/metrics';
}
