<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;

class LookupValues extends MlbStatsRequest
{
    protected string $endpoint = 'lookup/values/all';
}
