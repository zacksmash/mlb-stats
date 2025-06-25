<?php

namespace Zacksmash\MlbStats\Params;

trait HasBattersOnTeamIds
{
    protected $battersOnTeamIds;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function battersOnTeamIds(mixed $args)
    {
        $battersOnTeamIds = is_array($args) ? $args : func_get_args();

        $this->battersOnTeamIds = implode(',', $battersOnTeamIds);

        return $this;
    }
}
