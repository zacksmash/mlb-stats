<?php

namespace Zacksmash\MlbStats\Params;

trait HasNames
{
    protected $names;

    /**
     * Name a player uses
     */
    public function names(mixed $args)
    {
        $names = is_array($args) ? $args : func_get_args();

        $this->names = implode(',', $names);

        return $this;
    }
}
