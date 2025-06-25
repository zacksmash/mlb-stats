<?php

namespace Zacksmash\MlbStats\Params;

trait HasHitTrajectories
{
    protected $hitTrajectories;

    /**
     * Trajectory of hit (line drive, fly ball, etc...)
     */
    public function hitTrajectories(mixed $args)
    {
        $hitTrajectories = is_array($args) ? $args : func_get_args();

        $this->hitTrajectories = implode(',', $hitTrajectories);

        return $this;
    }
}
