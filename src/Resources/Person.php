<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGroup;
use Zacksmash\MlbStats\Params\HasPersonIds;
use Zacksmash\MlbStats\Params\HasSeason;

class Person extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasGroup;
    use HasPersonIds;
    use HasSeason;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function __construct(int|string $personId)
    {
        $this->endpoint = "people/$personId";
    }
}
