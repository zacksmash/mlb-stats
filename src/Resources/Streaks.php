<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStreak;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasInverse;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasPlayerId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartersOnly;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStreakLevel;
use Zacksmash\MlbStats\Params\HasStreakOrg;
use Zacksmash\MlbStats\Params\HasStreakSpan;
use Zacksmash\MlbStats\Params\HasStreakStat;
use Zacksmash\MlbStats\Params\HasStreakThreshold;
use Zacksmash\MlbStats\Params\HasTeamId;

class Streaks extends MlbStatsRequest
{
    use HasActiveStreak;
    use HasFields;
    use HasGameType;
    use HasInverse;
    use HasLeagueId;
    use HasLimit;
    use HasPlayerId;
    use HasSeason;
    use HasSportId;
    use HasStartersOnly;
    use HasStatGroup;
    use HasStreakLevel;
    use HasStreakOrg;
    use HasStreakSpan;
    use HasStreakStat;
    use HasStreakThreshold;
    use HasTeamId;

    protected string $endpoint = 'streaks';
}
