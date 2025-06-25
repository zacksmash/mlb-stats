<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherDivisionIds
{
    protected $pitcherDivisionIds;

    /**
     * Comma delimited list of Unique League Identifiers
     */
    public function pitcherDivisionIds(mixed $args)
    {
        $pitcherDivisionIds = is_array($args) ? $args : func_get_args();

        $this->pitcherDivisionIds = implode(',', $pitcherDivisionIds);

        return $this;
    }
}
