<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherIds
{
    protected $pitcherIds;

    /**
     * A unique identifier for a player
     */
    public function pitcherIds(mixed $args)
    {
        $pitcherIds = is_array($args) ? $args : func_get_args();

        $this->pitcherIds = implode(',', $pitcherIds);

        return $this;
    }
}
