<?php

namespace Zacksmash\MlbStats\Params;

trait HasEventIds
{
    protected $eventIds;

    /**
     * A unique identifier for non-game event
     */
    public function eventIds(mixed $args)
    {
        $eventIds = is_array($args) ? $args : func_get_args();

        $this->eventIds = implode(',', $eventIds);

        return $this;
    }
}
