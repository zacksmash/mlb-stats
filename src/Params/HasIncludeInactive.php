<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeInactive
{
    protected $includeInactive;

    /**
     * No Description Provided
     */
    public function includeInactive(bool $includeInactive = true)
    {
        $this->includeInactive = $includeInactive;

        return $this;
    }
}
