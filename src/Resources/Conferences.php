<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasConferenceId;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSeason;

class Conferences extends MlbStatsRequest
{
    use HasConferenceId, HasFields, HasSeason;

    protected string $endpoint = 'conferences';
}
