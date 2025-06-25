<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDivisionId;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasWithGameTypeDates;

class SeasonsAll extends MlbStatsRequest
{
    use HasDivisionId;
    use HasFields;
    use HasLeagueId;
    use HasSportId;
    use HasWithGameTypeDates;

    protected string $endpoint = 'seasons/all';
}
