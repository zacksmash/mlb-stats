<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameModeId;
use Zacksmash\MlbStats\Params\HasHydrate;
use Zacksmash\MlbStats\Params\HasIsHit;
use Zacksmash\MlbStats\Params\HasIsPickoff;
use Zacksmash\MlbStats\Params\HasIsPitch;
use Zacksmash\MlbStats\Params\HasUpdatedSince;

#[RequiresOneOf(['gameModeId'])]
class GameGuids extends MlbStatsRequest
{
    use HasFields;
    use HasGameModeId;
    use HasHydrate;
    use HasIsHit;
    use HasIsPickoff;
    use HasIsPitch;
    use HasUpdatedSince;

    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/{$gamePk}/guids";
    }
}
