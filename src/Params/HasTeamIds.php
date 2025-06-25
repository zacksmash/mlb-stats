<?php

namespace Zacksmash\MlbStats\Params;

trait HasTeamIds
{
    protected $teamIds;

    /**
     * Comma delimited list of Unique Team identifiers
     */
    public function teamIds(mixed $args)
    {
        $teamIds = is_array($args) ? $args : func_get_args();

        $this->teamIds = implode(',', $teamIds);

        return $this;
    }
}
