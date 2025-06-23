<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class DraftLatest extends MlbStatsRequest
{
    use HasFields;

    public function __construct(string $year)
    {
        $this->endpoint = "draft/{$year}/latest";
    }
}
