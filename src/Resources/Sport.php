<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHasStats;
use Zacksmash\MlbStats\Params\HasSeason;

class Sport extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasFields;
    use HasHasStats;
    use HasSeason;

    /**
     * Top level organization of a sport
     */
    public function __construct(int|string $sportId)
    {
        $this->endpoint = "sports/$sportId";
    }
}
