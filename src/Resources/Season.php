<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasWithGameTypeDates;

#[RequiresOneOf(['sportId', 'withGameTypeDates'])]
class Season extends MlbStatsRequest
{
    use HasFields;
    use HasSportId;
    use HasWithGameTypeDates;

    public function __construct(int|string $seasonId)
    {
        $this->endpoint = "seasons/{$seasonId}";
    }
}
