<?php

namespace Zacksmash\MlbStats\Params;

trait HasStatGroup
{
    protected $statGroup;

    /**
     * Comma delimited list of  categories of statistic to return. Available types in /api/v1/statGroups
     */
    public function statGroup(mixed $args)
    {
        $statGroup = is_array($args) ? $args : func_get_args();

        $this->statGroup = implode(',', $statGroup);

        return $this;
    }
}
