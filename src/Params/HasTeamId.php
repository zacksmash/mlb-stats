<?php

namespace Zacksmash\MlbStats\Params;

trait HasTeamId
{
    protected $teamId;

    /**
     * Unique Team Identifier. Format: 141, 147, etc
     */
    public function teamId(mixed $args)
    {
        $teamId = is_array($args) ? $args : func_get_args();

        $this->teamId = implode(',', $teamId);

        return $this;
    }
}
