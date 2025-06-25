<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartSeason
{
    protected $startSeason;

    /**
     * Start date for range of data (used with end date optionally). Example: '2018' or '2018.2'
     */
    public function startSeason(string $startSeason)
    {
        $this->startSeason = $startSeason;

        return $this;
    }
}
