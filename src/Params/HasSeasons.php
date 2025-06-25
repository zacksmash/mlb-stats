<?php

namespace Zacksmash\MlbStats\Params;

trait HasSeasons
{
    protected $seasons;

    /**
     * Comma delimited list of Seasons of play
     */
    public function seasons(mixed $args)
    {
        $seasons = is_array($args) ? $args : func_get_args();

        $this->seasons = implode(',', $seasons);

        return $this;
    }
}
