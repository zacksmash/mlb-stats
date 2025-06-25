<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasPersonIds;
use Zacksmash\MlbStats\Params\HasSeason;

class People extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasGroup;
    use HasPersonIds;
    use HasSeason;

    protected string $endpoint = 'people';
}
