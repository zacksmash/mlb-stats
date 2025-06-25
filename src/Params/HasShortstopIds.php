<?php

namespace Zacksmash\MlbStats\Params;

trait HasShortstopIds
{
    protected $shortstopIds;

    /**
     * A unique identifier for a player
     */
    public function shortstopIds(mixed $args)
    {
        $shortstopIds = is_array($args) ? $args : func_get_args();

        $this->shortstopIds = implode(',', $shortstopIds);

        return $this;
    }
}
