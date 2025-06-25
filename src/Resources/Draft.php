<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBisPlayerId;
use Zacksmash\MlbStats\Params\HasCountry;
use Zacksmash\MlbStats\Params\HasDrafted;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasName;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasPlayerId;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasRound;
use Zacksmash\MlbStats\Params\HasSchool;
use Zacksmash\MlbStats\Params\HasSortBy;
use Zacksmash\MlbStats\Params\HasState;
use Zacksmash\MlbStats\Params\HasTeam;
use Zacksmash\MlbStats\Params\HasTeamId;

class Draft extends MlbStatsRequest
{
    use HasBisPlayerId;
    use HasCountry;
    use HasDrafted;
    use HasFields;
    use HasLimit;
    use HasName;
    use HasOffset;
    use HasOrder;
    use HasPlayerId;
    use HasPosition;
    use HasRound;
    use HasSchool;
    use HasSortBy;
    use HasState;
    use HasTeam;
    use HasTeamId;

    /**
     * Year the player was drafted. Format: 2000
     */
    public function __construct(int|string|null $year)
    {
        $this->endpoint = "draft/$year";
    }
}
