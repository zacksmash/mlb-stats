<?php

namespace Zacksmash\MlbStats\Params;

trait HasPersonIds
{
    protected $personIds;

    public function personIds(mixed $args)
    {
        $personIds = is_array($args) ? $args : func_get_args();

        $this->personIds = implode(',', $personIds);

        return $this;
    }
}
