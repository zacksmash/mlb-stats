<?php

namespace Zacksmash\MlbStats\Params;

trait HasHydrate
{
    protected $hydrate;

    public function hydrate(mixed $args)
    {
        $hydrate = is_array($args) ? $args : func_get_args();

        $this->hydrate = implode(',', $hydrate);

        return $this;
    }
}
