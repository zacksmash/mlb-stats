<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasIncludeInactive;
use Zacksmash\MlbStats\Params\HasSeason;

class Conferences extends MlbStatsRequest
{
    use HasFields;
    use HasIncludeInactive;
    use HasSeason;

    protected string $endpoint = 'conferences';
}
