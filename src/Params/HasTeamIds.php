<?php

namespace Zacksmash\MlbStats\Params;

trait HasTeamIds
{
    protected $teamIds;

    public function teamIds(mixed $args)
    {
        $teamIds = is_array($args) ? $args : func_get_args();

        $this->teamIds = implode(',', $teamIds);

        return $this;
    }
}
