<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class ReviewReasons extends MlbStatsRequest
{
    use HasFields;

    protected string $endpoint = 'reviewReasons';
}
