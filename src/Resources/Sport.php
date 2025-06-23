<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class Sport extends MlbStatsRequest
{
    use HasFields;

    public function __construct(int|string $sportId)
    {
        $this->endpoint = "sports/{$sportId}";
    }
}
