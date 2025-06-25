<?php

namespace Zacksmash\MlbStats\Params;

trait HasStreakStat
{
    protected $streakStat;

    /**
     * No Description Provided
     */
    public function streakStat(mixed $args)
    {
        $streakStat = is_array($args) ? $args : func_get_args();

        $this->streakStat = implode(',', $streakStat);

        return $this;
    }
}
