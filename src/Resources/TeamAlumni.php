<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf('season')]
class TeamAlumni extends MlbStatsRequest
{
    use HasFields;
    use HasGroup;
    use HasSeason;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/alumni";
    }
}
