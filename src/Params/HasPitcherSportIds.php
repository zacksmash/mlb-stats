<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherSportIds
{
    protected $pitcherSportIds;

    /**
     * Comma delimited list of top level organizations of a sport
     */
    public function pitcherSportIds(mixed $args)
    {
        $pitcherSportIds = is_array($args) ? $args : func_get_args();

        $this->pitcherSportIds = implode(',', $pitcherSportIds);

        return $this;
    }
}
