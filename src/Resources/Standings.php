<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasStandingsTypes;
use Zacksmash\MlbStats\Params\HasTeamId;

#[RequiresAllOf(['leagueId', 'season'])]
class Standings extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasHydrate;
    use HasLeagueId;
    use HasSeason;
    use HasStandingsTypes;
    use HasTeamId;

    protected string $endpoint = 'standings';
}
