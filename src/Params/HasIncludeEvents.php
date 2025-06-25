<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeEvents
{
    protected $includeEvents;

    /**
     * No Description Provided
     */
    public function includeEvents(bool $includeEvents = true)
    {
        $this->includeEvents = $includeEvents;

        return $this;
    }
}
