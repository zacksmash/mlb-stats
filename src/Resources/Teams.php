<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasAllStarStatuses;
use Zacksmash\MlbStats\Params\HasDivisionId;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;

class Teams extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasAllStarStatuses;
    use HasDivisionId;
    use HasFields;
    use HasGameType;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasSeason;
    use HasSportId;
    use HasSportIds;

    protected string $endpoint = 'teams';
}
