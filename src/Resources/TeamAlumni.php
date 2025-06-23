<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season', 'group'])]
class TeamAlumni extends MlbStatsRequest
{
    use HasFields;
    use HasGroup;
    use HasHydrate;
    use HasSeason;

    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/{$teamId}/alumni";
    }
}
