<?php

namespace Zacksmash\MlbStats\Params;

trait HasEventTypes
{
    protected $eventTypes;

    /**
     * Comma delimited list of type of events. <b>Note: Don't Use. This will be deprecated in favor of calendarTypes</b>
     */
    public function eventTypes(mixed $args)
    {
        $eventTypes = is_array($args) ? $args : func_get_args();

        $this->eventTypes = implode(',', $eventTypes);

        return $this;
    }
}
