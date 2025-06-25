<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterDivisionIds
{
    protected $batterDivisionIds;

    /**
     * Comma delimited list of Unique League Identifiers
     */
    public function batterDivisionIds(mixed $args)
    {
        $batterDivisionIds = is_array($args) ? $args : func_get_args();

        $this->batterDivisionIds = implode(',', $batterDivisionIds);

        return $this;
    }
}
