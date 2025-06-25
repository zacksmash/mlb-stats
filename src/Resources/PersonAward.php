<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class PersonAward extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function __construct(int|string $personId)
    {
        $this->endpoint = "people/$personId/awards";
    }
}
