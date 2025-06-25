<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasIncludeInactive;
use Zacksmash\MlbStats\Params\HasSeason;

class Conference extends MlbStatsRequest
{
    use HasFields;
    use HasIncludeInactive;
    use HasSeason;

    /**
     * Conference Identifier
     */
    public function __construct(int|string $conferenceId)
    {
        $this->endpoint = "conferences/$conferenceId";
    }
}
