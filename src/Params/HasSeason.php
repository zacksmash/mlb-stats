<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeason
{
    protected $season;

    public function season(int|string $season)
    {
        $this->season = (string) $season;

        return $this;
    }
}
