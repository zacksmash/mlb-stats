<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasFields;

class Broadcasters extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasFields;

    protected string $endpoint = 'broadcasters';
}
