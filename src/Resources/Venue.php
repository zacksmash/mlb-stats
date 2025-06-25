<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActive;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasIncludeEvents;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasVenueIds;

class Venue extends MlbStatsRequest
{
    use HasActive;
    use HasFields;
    use HasGameType;
    use HasGameTypes;
    use HasIncludeEvents;
    use HasLeagueId;
    use HasLeagueIds;
    use HasSeason;
    use HasSeasons;
    use HasSportId;
    use HasSportIds;
    use HasVenueIds;

    /**
     * Unique Venue Identifier
     */
    public function __construct(int|string $venueId)
    {
        $this->endpoint = "venues/$venueId";
    }
}
