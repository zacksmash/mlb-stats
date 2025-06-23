<?php

namespace Zacksmash\MlbStats\Params;

trait HasBisPlayerId
{
    protected $bisPlayerId;

    public function bisPlayerId(mixed $args)
    {
        $bisPlayerIds = is_array($args) ? $args : func_get_args();

        $this->bisPlayerId = implode(',', $bisPlayerIds);

        return $this;
    }
}
