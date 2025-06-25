<?php

namespace Zacksmash\MlbStats\Params;

trait HasRunnerThirdIds
{
    protected $runnerThirdIds;

    /**
     * A unique identifier for a player
     */
    public function runnerThirdIds(mixed $args)
    {
        $runnerThirdIds = is_array($args) ? $args : func_get_args();

        $this->runnerThirdIds = implode(',', $runnerThirdIds);

        return $this;
    }
}
