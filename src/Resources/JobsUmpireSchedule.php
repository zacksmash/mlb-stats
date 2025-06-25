<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf('season')]
class JobsUmpireSchedule extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;

    /**
     * A unique identifier for an umpire
     */
    public function __construct(int|string $umpireId)
    {
        $this->endpoint = "jobs/umpires/games/$umpireId";
    }
}
