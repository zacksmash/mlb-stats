<?php

namespace Zacksmash\MlbStats\Params;

trait HasRunnerSecondIds
{
    protected $runnerSecondIds;

    /**
     * A unique identifier for a player
     */
    public function runnerSecondIds(mixed $args)
    {
        $runnerSecondIds = is_array($args) ? $args : func_get_args();

        $this->runnerSecondIds = implode(',', $runnerSecondIds);

        return $this;
    }
}
