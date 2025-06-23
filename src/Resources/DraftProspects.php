<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBisPlayerId;
use Zacksmash\MlbStats\Params\HasCountry;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasName;
use Zacksmash\MlbStats\Params\HasPlayerId;
use Zacksmash\MlbStats\Params\HasPosition;
use Zacksmash\MlbStats\Params\HasRound;
use Zacksmash\MlbStats\Params\HasSchool;
use Zacksmash\MlbStats\Params\HasState;
use Zacksmash\MlbStats\Params\HasTeamId;

class DraftProspects extends MlbStatsRequest
{
    use HasBisPlayerId;
    use HasCountry;
    use HasFields;
    use HasLimit;
    use HasName;
    use HasPlayerId;
    use HasPosition;
    use HasRound;
    use HasSchool;
    use HasState;
    use HasTeamId;

    public function __construct(string $year)
    {
        $this->endpoint = "draft/prospects/{$year}";
    }
}
