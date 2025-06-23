<?php

namespace Zacksmash\MlbStats;

class MlbStatsResponse
{
    public function __construct(
        public readonly ?string $copyright,
        public readonly ?MlbStatsCollection $data
    ) {}
}
