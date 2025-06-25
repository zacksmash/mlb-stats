<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasWithGameTypeDates;

class Seasons extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;
    use HasSportId;
    use HasWithGameTypeDates;

    protected string $endpoint = 'seasons';
}
