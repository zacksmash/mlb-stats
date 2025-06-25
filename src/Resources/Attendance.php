<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasTeamId;

#[RequiresOneOf('teamId', 'leagueId', 'leagueListId')]
class Attendance extends MlbStatsRequest
{
    use HasDate;
    use HasEndDate;
    use HasFields;
    use HasGameType;
    use HasLeagueId;
    use HasLeagueListId;
    use HasSeason;
    use HasStartDate;
    use HasTeamId;

    protected string $endpoint = 'attendance';
}
