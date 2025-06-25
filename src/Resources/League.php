<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasActiveStatus;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasSportId;

class League extends MlbStatsRequest
{
    use HasActiveStatus;
    use HasFields;
    use HasLeagueIds;
    use HasSeason;
    use HasSeasons;
    use HasSportId;

    /**
     * Unique League Identifier
     */
    public function __construct(int|string $leagueId)
    {
        $this->endpoint = "leagues/$leagueId";
    }
}
