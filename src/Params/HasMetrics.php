<?php

namespace Zacksmash\MlbStats\Params;

trait HasMetrics
{
    protected $metrics;

    public function metrics(mixed $args)
    {
        $metrics = is_array($args) ? $args : func_get_args();

        $this->metrics = implode(',', $metrics);

        return $this;
    }
}
