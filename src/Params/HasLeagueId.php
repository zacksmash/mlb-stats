<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeagueId
{
    protected $leagueId;

    public function leagueId(mixed $args)
    {
        $leagueIds = is_array($args) ? $args : func_get_args();

        $this->leagueId = implode(',', $leagueIds);

        return $this;
    }
}
