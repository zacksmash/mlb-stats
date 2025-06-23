<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasSeason;

#[RequiresOneOf(['season'])]
class SportPlayers extends MlbStatsRequest
{
    use HasGameType;
    use HasSeason;

    public function __construct(int|string $sportId)
    {
        $this->endpoint = "sports/{$sportId}/players";
    }
}
