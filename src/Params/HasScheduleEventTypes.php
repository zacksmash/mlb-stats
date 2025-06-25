<?php

namespace Zacksmash\MlbStats\Params;

trait HasScheduleEventTypes
{
    protected $scheduleEventTypes;

    /**
     * Comma delimited list of type of event types
     */
    public function scheduleEventTypes(mixed $args)
    {
        $scheduleEventTypes = is_array($args) ? $args : func_get_args();

        $this->scheduleEventTypes = implode(',', $scheduleEventTypes);

        return $this;
    }
}
