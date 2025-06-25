<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresOneOf('teamIds')]
class TeamsAffiliates extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasSeason;
    use HasSportId;
    use HasTeamIds;

    protected string $endpoint = 'teams/affiliates';
}
