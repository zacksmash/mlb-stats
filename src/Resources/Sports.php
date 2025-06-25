<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHasStats;
use Zacksmash\MlbStats\Params\HasSeason;

class Sports extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasFields;
    use HasHasStats;
    use HasSeason;

    protected string $endpoint = 'sports';

    public function __construct()
    {
        $this->sportId = null;
    }
}
