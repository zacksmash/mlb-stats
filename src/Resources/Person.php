<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;

class Person extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;

    public function __construct(int|string $personId)
    {
        $this->endpoint = "people/{$personId}";
    }
}
