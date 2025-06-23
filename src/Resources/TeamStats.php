<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasStats;

#[RequiresAllOf(['season', 'group', 'stats'])]
class TeamStats extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasGroup;
    use HasSeason;
    use HasStatGroup;
    use HasStats;

    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/{$teamId}/stats";
    }
}
