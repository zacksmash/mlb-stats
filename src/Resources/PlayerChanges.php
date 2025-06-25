<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAccent;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasUpdatedSince;

#[RequiresOneOf('updatedSince')]
class PlayerChanges extends MlbStatsRequest
{
    use HasAccent;
    use HasFields;
    use HasLimit;
    use HasOffset;
    use HasUpdatedSince;

    protected string $endpoint = 'people/changes';
}
