<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStreakSpan;
use Zacksmash\MlbStats\Params\HasStreakType;

#[RequiresOneOf(['streakType', 'season'])]
class StatsStreaks extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasHydrate;
    use HasLimit;
    use HasSeason;
    use HasSportId;
    use HasStreakSpan;
    use HasStreakType;

    protected string $endpoint = 'stats/streaks';
}
