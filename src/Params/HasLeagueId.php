<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeagueId
{
    protected $leagueId;

    /**
     * Comma delimited list of Unique league identifiers
     */
    public function leagueId(mixed $args)
    {
        $leagueId = is_array($args) ? $args : func_get_args();

        $this->leagueId = implode(',', $leagueId);

        return $this;
    }
}
