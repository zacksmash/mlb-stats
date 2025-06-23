<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasDates;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueListId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasTeamId;

#[RequiresOneOf('teamId', 'leagueId', 'leagueListId')]
class Attendance extends MlbStatsRequest
{
    use HasDate, HasDates, HasFields, HasGameType, HasLeagueId, HasLeagueListId, HasSeason, HasTeamId;

    protected string $endpoint = 'attendance';
}
