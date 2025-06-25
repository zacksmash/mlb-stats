<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasOrgId;

class Awards extends MlbStatsRequest
{
    use HasFields;
    use HasOrgId;

    protected string $endpoint = 'awards';
}
