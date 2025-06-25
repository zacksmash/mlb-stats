<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasTimecode;

class GameColorFeed extends MlbStatsRequest
{
    use HasFields;
    use HasTimecode;

    protected array $headers = [
        'Accept-Encoding' => 'gzip',
    ];

    /**
     * Unique Primary Key Representing a Game
     */
    public function __construct(int|string $gamePk)
    {
        $this->endpoint = "game/$gamePk/feed/color";
    }
}
