<?php

namespace Zacksmash\MlbStats\Params;

trait HasRunnerFirstIds
{
    protected $runnerFirstIds;

    /**
     * A unique identifier for a player
     */
    public function runnerFirstIds(mixed $args)
    {
        $runnerFirstIds = is_array($args) ? $args : func_get_args();

        $this->runnerFirstIds = implode(',', $runnerFirstIds);

        return $this;
    }
}
