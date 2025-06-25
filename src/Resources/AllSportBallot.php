<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf('season')]
class AllSportBallot extends MlbStatsRequest
{
    use HasFields;
    use HasSeason;

    /**
     * Top level organization of a sport
     */
    public function __construct(int|string $sportId)
    {
        $this->endpoint = "sports/$sportId/allSportBallot";
    }
}
