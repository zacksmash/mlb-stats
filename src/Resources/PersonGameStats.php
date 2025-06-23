<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class PersonGameStats extends MlbStatsRequest
{
    use HasFields;

    public function __construct(int|string $personId, int|string $gamePk)
    {
        $this->endpoint = "people/{$personId}/stats/game/{$gamePk}";
    }
}
