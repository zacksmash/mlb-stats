<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

class AwardRecipients extends MlbStatsRequest
{
    use HasFields, HasHydrate, HasLeagueId, HasSeason, HasSportId;

    public function __construct(int|string $awardId)
    {
        $this->endpoint .= "awards/{$awardId}/recipients";
    }
}
