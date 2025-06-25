<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterTeamId
{
    protected $batterTeamId;

    /**
     * A unique identifier for the batter's team
     */
    public function batterTeamId(mixed $args)
    {
        $batterTeamId = is_array($args) ? $args : func_get_args();

        $this->batterTeamId = implode(',', $batterTeamId);

        return $this;
    }
}
