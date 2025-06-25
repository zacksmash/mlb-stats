<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBroadcasterIds;
use Zacksmash\MlbStats\Params\HasFields;

#[RequiresOneOf('broadcasterIds')]
class Broadcasts extends MlbStatsRequest
{
    use HasBroadcasterIds;
    use HasFields;

    protected string $endpoint = 'broadcast';
}
