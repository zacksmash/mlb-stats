<?php

namespace Zacksmash\MlbStats\Params;

trait HasHitTrajectory
{
    protected $hitTrajectory;

    /**
     * Trajectory of hit (line drive, fly ball, etc...)
     */
    public function hitTrajectory(mixed $args)
    {
        $hitTrajectory = is_array($args) ? $args : func_get_args();

        $this->hitTrajectory = implode(',', $hitTrajectory);

        return $this;
    }
}
