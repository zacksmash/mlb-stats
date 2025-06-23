<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeaderCategories;
use Zacksmash\MlbStats\Params\HasLeaderGameTypes;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['leaderCategories'])]
class TeamLeaders extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasLeaderCategories;
    use HasLeaderGameTypes;
    use HasLimit;
    use HasSeason;

    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/{$teamId}/leaders";
    }
}
