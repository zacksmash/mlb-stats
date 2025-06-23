<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasIncludeChildren;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasOrgType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamIds;
use Zacksmash\MlbStats\Params\HasVenueIds;

#[RequiresOneOf(['season'])]
class GamePace extends MlbStatsRequest
{
    use HasDates;
    use HasFields;
    use HasGameType;
    use HasIncludeChildren;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasOrgType;
    use HasSeason;
    use HasSportId;
    use HasTeamIds;
    use HasVenueIds;

    protected string $endpoint = 'gamePace';
}
