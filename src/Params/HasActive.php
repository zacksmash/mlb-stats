<?php

namespace Zacksmash\MlbStats\Params;

trait HasActive
{
    protected $active;

    /**
     * Whether or not a player is active
     */
    public function active(bool $active = true)
    {
        $this->active = $active;

        return $this;
    }
}
