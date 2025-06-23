<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\Enums\HighLowOrgType;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSortStat;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasTeamId;

#[RequiresAllOf(['sortStat', 'season'])]
class HighLow extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasLeagueId;
    use HasLimit;
    use HasSeason;
    use HasSortStat;
    use HasSportIds;
    use HasStatGroup;
    use HasTeamId;

    public function __construct(HighLowOrgType|string $orgType)
    {
        $orgTypeValue = $orgType instanceof HighLowOrgType
            ? $orgType->value
            : $orgType;

        $this->endpoint = "highLow/{$orgTypeValue}";
    }
}
