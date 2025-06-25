<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherLeagueIds
{
    protected $pitcherLeagueIds;

    /**
     * Comma delimited list of Unique league identifiers
     */
    public function pitcherLeagueIds(mixed $args)
    {
        $pitcherLeagueIds = is_array($args) ? $args : func_get_args();

        $this->pitcherLeagueIds = implode(',', $pitcherLeagueIds);

        return $this;
    }
}
