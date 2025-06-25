<?php

namespace Zacksmash\MlbStats\Params;

trait HasExpand
{
    protected $expand;

    /**
     * No Description Provided
     */
    public function expand(mixed $args)
    {
        $expand = is_array($args) ? $args : func_get_args();

        $this->expand = implode(',', $expand);

        return $this;
    }
}
