<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class AwardRecipients extends MlbStatsRequest
{
    use HasFields;
    use HasLeagueId;
    use HasSeason;
    use HasSportId;

    /**
     * Unique Award Identifier. Available awards in /api/v1/awards
     */
    public function __construct(string $awardId)
    {
        $this->endpoint = "awards/$awardId/recipients";
    }
}
