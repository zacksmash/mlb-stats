<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSportId;

class JobsOfficialScorers extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasHydrate;
    use HasSportId;

    protected string $endpoint = 'jobs/officialScorers';
}
