<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterLeagueIds
{
    protected $batterLeagueIds;

    /**
     * Comma delimited list of Unique league identifiers
     */
    public function batterLeagueIds(mixed $args)
    {
        $batterLeagueIds = is_array($args) ? $args : func_get_args();

        $this->batterLeagueIds = implode(',', $batterLeagueIds);

        return $this;
    }
}
