<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePks;

#[RequiresOneOf('gamePks')]
class GameLastPitch extends MlbStatsRequest
{
    use HasFields;
    use HasGamePks;

    protected string $endpoint = 'game/lastPitch';
}
