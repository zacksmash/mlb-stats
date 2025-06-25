<?php

namespace Zacksmash\MlbStats\Params;

trait HasDivisionIds
{
    protected $divisionIds;

    /**
     * Comma delimited list of Unique League Identifiers
     */
    public function divisionIds(mixed $args)
    {
        $divisionIds = is_array($args) ? $args : func_get_args();

        $this->divisionIds = implode(',', $divisionIds);

        return $this;
    }
}
