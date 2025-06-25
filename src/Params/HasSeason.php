<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeason
{
    protected $season;

    /**
     * Season of play
     */
    public function season(int|string $season)
    {
        $this->season = (string) $season;

        return $this;
    }
}
