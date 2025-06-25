<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasExcludeGamePks;
use Zacksmash\MlbStats\Params\HasExcludeVenueIds;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasIncludeChildren;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasOrgType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasTeamIds;
use Zacksmash\MlbStats\Params\HasVenueIds;

class GamePace extends MlbStatsRequest
{
    use HasEndDate;
    use HasExcludeGamePks;
    use HasExcludeVenueIds;
    use HasFields;
    use HasGameType;
    use HasIncludeChildren;
    use HasLeagueId;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasOrgType;
    use HasSeason;
    use HasSportId;
    use HasSportIds;
    use HasStartDate;
    use HasTeamId;
    use HasTeamIds;
    use HasVenueIds;

    protected string $endpoint = 'gamePace';
}
