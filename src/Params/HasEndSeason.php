<?php

namespace Zacksmash\MlbStats\Params;

trait HasEndSeason
{
    protected $endSeason;

    /**
     * End date for range of data (used with start date optionally). Format: '2018' or '2018.2'
     */
    public function endSeason(string $endSeason)
    {
        $this->endSeason = $endSeason;

        return $this;
    }
}
