<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasIncludeMLB;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasStandingsTypes;
use Zacksmash\MlbStats\Params\HasTeamId;

class Standings extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasIncludeMLB;
    use HasLeagueId;
    use HasSeason;
    use HasStandingsTypes;
    use HasTeamId;

    /**
     * Type of season. Available types in /api/v1/standingsTypes
     */
    public function __construct(string $standingsType)
    {
        $this->endpoint = "standings/$standingsType";
    }
}
