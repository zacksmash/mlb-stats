<?php

namespace Zacksmash\MlbStats\Params;

trait HasStats
{
    protected $stats;

    /**
     * Type of statistics. Format: Individual, Team, Career, etc. Available types in /api/v1/statTypes
     */
    public function stats(mixed $args)
    {
        $stats = is_array($args) ? $args : func_get_args();

        $this->stats = implode(',', $stats);

        return $this;
    }
}
