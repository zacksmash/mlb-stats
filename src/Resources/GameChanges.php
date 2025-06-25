<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePks;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasGameTypes;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOffset;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasSportIds;
use Zacksmash\MlbStats\Params\HasUpdatedSince;

class GameChanges extends MlbStatsRequest
{
    use HasFields;
    use HasGamePks;
    use HasGameType;
    use HasGameTypes;
    use HasLimit;
    use HasOffset;
    use HasSeason;
    use HasSportId;
    use HasSportIds;
    use HasUpdatedSince;

    protected string $endpoint = 'game/changes';
}
