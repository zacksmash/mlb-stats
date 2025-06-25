<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeagueIds
{
    protected $leagueIds;

    /**
     * Comma delimited list of Unique league identifiers
     */
    public function leagueIds(mixed $args)
    {
        $leagueIds = is_array($args) ? $args : func_get_args();

        $this->leagueIds = implode(',', $leagueIds);

        return $this;
    }
}
