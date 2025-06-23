<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;

#[RequiresOneOf(['sportId', 'leagueIds'])]
class League extends MlbStatsRequest
{
    use HasFields;
    use HasLeagueIds;
    use HasSeasons;
    use HasSportId;

    protected string $endpoint = 'league';
}
