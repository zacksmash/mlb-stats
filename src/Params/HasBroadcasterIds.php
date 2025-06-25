<?php

namespace Zacksmash\MlbStats\Params;

trait HasBroadcasterIds
{
    protected $broadcasterIds;

    /**
     * All of the broadcast details
     */
    public function broadcasterIds(mixed $args)
    {
        $broadcasterIds = is_array($args) ? $args : func_get_args();

        $this->broadcasterIds = implode(',', $broadcasterIds);

        return $this;
    }
}
