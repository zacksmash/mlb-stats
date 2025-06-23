<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;

class TeamPersonnel extends MlbStatsRequest
{
    use HasDate;
    use HasFields;

    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/{$teamId}/personnel";
    }
}
