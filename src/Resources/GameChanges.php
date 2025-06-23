<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasUpdatedSince;

#[RequiresOneOf(['updatedSince'])]
class GameChanges extends MlbStatsRequest
{
    use HasFields;
    use HasSportId;
    use HasUpdatedSince;

    protected string $endpoint = 'game/changes';
}
