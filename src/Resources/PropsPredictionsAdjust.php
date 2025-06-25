<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasGamePk;

#[RequiresOneOf('gamePk')]
class PropsPredictionsAdjust extends MlbStatsRequest
{
    use HasGamePk;

    protected string $endpoint = 'props/play/predictions/adjust';
}
