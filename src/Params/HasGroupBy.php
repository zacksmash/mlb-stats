<?php

namespace Zacksmash\MlbStats\Params;

trait HasGroupBy
{
    protected $groupBy;

    /**
     * Group stats by PLAYER, TEAM, SEASON, VENUE, SPORT or STAT_GROUP
     */
    public function groupBy(mixed $args)
    {
        $groupBy = is_array($args) ? $args : func_get_args();

        $this->groupBy = implode(',', $groupBy);

        return $this;
    }
}
