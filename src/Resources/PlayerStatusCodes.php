<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class PlayerStatusCodes extends MlbStatsRequest
{
    use HasFields;

    protected string $endpoint = 'playerStatusCodes';
}
