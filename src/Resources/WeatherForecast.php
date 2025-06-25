<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;

class WeatherForecast extends MlbStatsRequest
{
    use HasFields;

    /**
     * Unique Primary Key Representing a Game
     * Venue roof type
     */
    public function __construct(int|string $gamePk, string $roofType)
    {
        $this->endpoint = "weather/game/$gamePk/forecast/$roofType";
    }
}
