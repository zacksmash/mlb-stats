<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasJobType;
use Zacksmash\MlbStats\Params\HasSportId;

#[RequiresOneOf('jobType')]
class Jobs extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasJobType;
    use HasSportId;

    protected string $endpoint = 'jobs';
}
