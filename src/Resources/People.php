<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasPersonIds;

#[RequiresOneOf(['personIds'])]
class People extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasPersonIds;

    protected string $endpoint = 'people';
}
