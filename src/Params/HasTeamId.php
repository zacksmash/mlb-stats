<?php

namespace Zacksmash\MlbStats\Params;

trait HasTeamId
{
    protected $teamId;

    public function teamId(mixed $args)
    {
        $teamIds = is_array($args) ? $args : func_get_args();

        $this->teamId = implode(',', $teamIds);

        return $this;
    }
}
