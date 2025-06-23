<?php

namespace Zacksmash\MlbStats\Params;

trait HasGroup
{
    protected $group;

    public function group(mixed $args)
    {
        $group = is_array($args) ? $args : func_get_args();

        $this->group = implode(',', $group);

        return $this;
    }
}
