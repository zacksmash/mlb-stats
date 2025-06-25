<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class WeatherBasic extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Venue Identifier
     */
    public function __construct(int|string $venueId)
    {
        $this->endpoint = "weather/venues/$venueId/basic";
    }
}
