<?php

namespace Zacksmash\MlbStats\Params;

trait HasEventType
{
    protected $eventType;

    /**
     * Type of event
     */
    public function eventType(mixed $args)
    {
        $eventType = is_array($args) ? $args : func_get_args();

        $this->eventType = implode(',', $eventType);

        return $this;
    }
}
