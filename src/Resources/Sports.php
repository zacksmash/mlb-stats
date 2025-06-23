<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSportId;

class Sports extends MlbStatsRequest
{
    use HasFields;
    use HasSportId;

    protected string $endpoint = 'sports';

    public function __construct()
    {
        $this->sportId = null;
    }
}
