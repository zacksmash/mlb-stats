<?php

namespace Zacksmash\MlbStats\Params;

trait HasCompareOver
{
    protected $compareOver;

    /**
     * Group stats by PLAYER, TEAM, SEASON, VENUE, SPORT or STAT_GROUP
     */
    public function compareOver(mixed $args)
    {
        $compareOver = is_array($args) ? $args : func_get_args();

        $this->compareOver = implode(',', $compareOver);

        return $this;
    }
}
