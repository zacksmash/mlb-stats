<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasGamePk;
use Zacksmash\MlbStats\Params\HasTimecode;

#[RequiresOneOf('gamePk')]
class StatsStolenBaseProbability extends MlbStatsRequest
{
    use HasGamePk;
    use HasTimecode;

    protected string $endpoint = 'stats/analytics/stolenBaseProbability';
}
