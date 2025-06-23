<?php

namespace Zacksmash\MlbStats\Params;

trait HasDivisionId
{
    protected $divisionId;

    public function divisionId(mixed $args)
    {
        $divisionIds = is_array($args) ? $args : func_get_args();

        $this->divisionId = implode(',', $divisionIds);

        return $this;
    }
}
