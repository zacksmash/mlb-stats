<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasWithGameTypeDates;

#[RequiresOneOf(['sportId', 'withGameTypeDates'])]
class Seasons extends MlbStatsRequest
{
    use HasFields;
    use HasSportId;
    use HasWithGameTypeDates;

    protected string $endpoint = 'seasons';
}
