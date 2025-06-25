<?php

namespace Zacksmash\MlbStats\Params;

trait HasSitCodes
{
    protected $sitCodes;

    /**
     * Situation code for a given stat split.
     */
    public function sitCodes(mixed $args)
    {
        $sitCodes = is_array($args) ? $args : func_get_args();

        $this->sitCodes = implode(',', $sitCodes);

        return $this;
    }
}
