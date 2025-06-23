<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasVenueIds;

#[RequiresOneOf(['venueIds', 'sportIds'])]
class Venues extends MlbStatsRequest
{
    use HasFields;
    use HasHydrate;
    use HasSeason;
    use HasSportIds;
    use HasVenueIds;

    protected string $endpoint = 'venues';
}
