<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresOneOf(['teamIds'])]
class TeamsHistory extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;
    use HasTeamIds;

    protected string $endpoint = 'teams/history';
}
