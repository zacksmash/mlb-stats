<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherTeamIds
{
    protected $pitcherTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function pitcherTeamIds(mixed $args)
    {
        $pitcherTeamIds = is_array($args) ? $args : func_get_args();

        $this->pitcherTeamIds = implode(',', $pitcherTeamIds);

        return $this;
    }
}
