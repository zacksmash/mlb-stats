<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class JobsUmpireGames extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasSeason;

    public function __construct(int|string $umpireId)
    {
        $this->endpoint = "jobs/umpires/games/{$umpireId}";
    }
}
