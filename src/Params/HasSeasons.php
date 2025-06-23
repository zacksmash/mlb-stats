<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeasons
{
    protected $seasons;

    public function seasons(mixed $args)
    {
        $seasons = is_array($args) ? $args : func_get_args();

        $this->seasons = implode(',', $seasons);

        return $this;
    }
}
