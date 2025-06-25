<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasTeamId;

class HighLow extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasLeagueId;
    use HasLimit;
    use HasOffset;
    use HasSeason;
    use HasSortStat;
    use HasSportId;
    use HasStatGroup;
    use HasTeamId;

    /**
     * Type of high/low stats ('player', 'team', 'game')
     */
    public function __construct(string $highLowType)
    {
        $this->endpoint = "highLow/$highLowType";
    }
}
