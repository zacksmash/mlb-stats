<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasEndSeason;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasStartSeason;
use Zacksmash\MlbStats\Params\HasTeamIds;

#[RequiresOneOf('teamIds')]
class TeamsHistory extends MlbStatsRequest
{
    use HasEndSeason;
    use HasFields;
    use HasStartSeason;
    use HasTeamIds;

    protected string $endpoint = 'teams/history';
}
