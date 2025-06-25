<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsPitch
{
    protected $isPitch;

    /**
     * If there was a pitch
     */
    public function isPitch(bool $isPitch = true)
    {
        $this->isPitch = $isPitch;

        return $this;
    }
}
