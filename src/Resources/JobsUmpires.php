<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class JobsUmpires extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasSeason;
    use HasSportId;

    protected string $endpoint = 'jobs/umpires';
}
