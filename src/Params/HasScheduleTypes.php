<?php

namespace Zacksmash\MlbStats\Params;

trait HasScheduleTypes
{
    protected $scheduleTypes;

    public function scheduleTypes(mixed $args)
    {
        $scheduleTypes = is_array($args) ? $args : func_get_args();

        $this->scheduleTypes = implode(',', $scheduleTypes);

        return $this;
    }
}
