<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasActive;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasNames;
use Zacksmash\MlbStats\Params\HasPersonIds;
use Zacksmash\MlbStats\Params\HasRookie;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasTeamIds;
use Zacksmash\MlbStats\Params\HasVerified;

class PeopleSearch extends MlbStatsRequest
{
    use HasAccent;
    use HasActive;
    use HasFields;
    use HasLeagueIds;
    use HasLeagueListId;
    use HasLimit;
    use HasNames;
    use HasPersonIds;
    use HasRookie;
    use HasSeasons;
    use HasSportIds;
    use HasTeamIds;
    use HasVerified;

    protected string $endpoint = 'people/search';
}
