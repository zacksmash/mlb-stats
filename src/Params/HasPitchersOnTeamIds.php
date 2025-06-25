<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchersOnTeamIds
{
    protected $pitchersOnTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function pitchersOnTeamIds(mixed $args)
    {
        $pitchersOnTeamIds = is_array($args) ? $args : func_get_args();

        $this->pitchersOnTeamIds = implode(',', $pitchersOnTeamIds);

        return $this;
    }
}
