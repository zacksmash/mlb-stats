<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeagueIds
{
    protected $leagueIds;

    public function leagueIds(mixed $args)
    {
        $leagueIds = is_array($args) ? $args : func_get_args();

        $this->leagueIds = implode(',', $leagueIds);

        return $this;
    }
}
