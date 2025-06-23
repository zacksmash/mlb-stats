<?php

namespace Zacksmash\MlbStats\Params;

trait HasEventTypes
{
    protected $eventTypes;

    public function eventTypes(mixed $args)
    {
        $eventTypes = is_array($args) ? $args : func_get_args();

        $this->eventTypes = implode(',', $eventTypes);

        return $this;
    }
}
