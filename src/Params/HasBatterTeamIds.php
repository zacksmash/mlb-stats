<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterTeamIds
{
    protected $batterTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function batterTeamIds(mixed $args)
    {
        $batterTeamIds = is_array($args) ? $args : func_get_args();

        $this->batterTeamIds = implode(',', $batterTeamIds);

        return $this;
    }
}
