<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;

class TeamAffiliates extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasSeason;

    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/{$teamId}/affiliates";
    }
}
