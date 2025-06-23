<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class PersonCurrentGameStats extends MlbStatsRequest
{
    use HasFields;

    public function __construct(int|string $personId)
    {
        $this->endpoint = "people/{$personId}/stats/game/current";
    }
}
