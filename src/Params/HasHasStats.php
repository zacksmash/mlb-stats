<?php

namespace Zacksmash\MlbStats\Params;

trait HasHasStats
{
    protected $hasStats;

    /**
     * Returns sports that have individual player stats
     */
    public function hasStats(bool $hasStats = true)
    {
        $this->hasStats = $hasStats;

        return $this;
    }
}
