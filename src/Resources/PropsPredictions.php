<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasBatSide;
use Zacksmash\MlbStats\Params\HasBatterId;
use Zacksmash\MlbStats\Params\HasBatterPosition;
use Zacksmash\MlbStats\Params\HasPitcherId;
use Zacksmash\MlbStats\Params\HasPitcherPosition;
use Zacksmash\MlbStats\Params\HasPitchHand;
use Zacksmash\MlbStats\Params\HasVenueId;

class PropsPredictions extends MlbStatsRequest
{
    use HasBatSide;
    use HasBatterId;
    use HasBatterPosition;
    use HasPitcherId;
    use HasPitcherPosition;
    use HasPitchHand;
    use HasVenueId;

    protected string $endpoint = 'props/play/predictions';
}
