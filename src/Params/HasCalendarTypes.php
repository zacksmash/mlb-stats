<?php

namespace Zacksmash\MlbStats\Params;

trait HasCalendarTypes
{
    protected $calendarTypes;

    /**
     * Comma delimited list of type of calendar types
     */
    public function calendarTypes(mixed $args)
    {
        $calendarTypes = is_array($args) ? $args : func_get_args();

        $this->calendarTypes = implode(',', $calendarTypes);

        return $this;
    }
}
