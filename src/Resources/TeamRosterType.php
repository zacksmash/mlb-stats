<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class TeamRosterType extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasHydrate;
    use HasSeason;

    public function __construct(int|string $teamId, string $rosterType)
    {
        $this->endpoint = "teams/{$teamId}/roster/{$rosterType}";
    }
}
