<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class DraftLatest extends MlbStatsRequest
{
    use HasFields;

    /**
     * Year the player was drafted. Format: 2000
     */
    public function __construct(int|string $year)
    {
        $this->endpoint = "draft/$year/latest";
    }
}
