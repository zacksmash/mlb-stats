<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePk;
use Zacksmash\MlbStats\Params\HasTimecode;

#[RequiresOneOf('gamePk')]
class StatsOutsAboveAverage extends MlbStatsRequest
{
    use HasFields;
    use HasGamePk;
    use HasTimecode;

    protected string $endpoint = 'stats/analytics/outsAboveAverage';
}
