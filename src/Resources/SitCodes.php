<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasStatGroup;

class SitCodes extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;
    use HasStatGroup;

    protected string $endpoint = 'situationCodes';
}
