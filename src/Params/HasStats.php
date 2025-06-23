<?php

namespace Zacksmash\MlbStats\Params;

trait HasStats
{
    protected $stats;

    public function stats(mixed $args)
    {
        $stats = is_array($args) ? $args : func_get_args();

        $this->stats = implode(',', $stats);

        return $this;
    }
}
