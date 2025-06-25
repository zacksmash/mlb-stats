<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

class TeamCoaches extends MlbStatsRequest
{
    use HasDate;
    use HasFields;
    use HasSeason;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function __construct(int|string $teamId)
    {
        $this->endpoint = "teams/$teamId/coaches";
    }
}
