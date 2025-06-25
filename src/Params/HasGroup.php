<?php

namespace Zacksmash\MlbStats\Params;

trait HasGroup
{
    protected $group;

    /**
     * Category of statistic to return. Available types in /api/v1/statGroups
     */
    public function group(mixed $args)
    {
        $group = is_array($args) ? $args : func_get_args();

        $this->group = implode(',', $group);

        return $this;
    }
}
