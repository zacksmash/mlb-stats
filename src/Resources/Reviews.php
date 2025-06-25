<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGameType;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSportId;

#[RequiresOneOf('sportId', 'season')]
class Reviews extends MlbStatsRequest
{
    use HasFields;
    use HasGameType;
    use HasSeason;
    use HasSportId;

    protected string $endpoint = 'review';
}
