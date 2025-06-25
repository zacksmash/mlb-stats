<?php

namespace Zacksmash\MlbStats\Params;

trait HasHasUpdates
{
    protected $hasUpdates;

    /**
     * True if updated by an auditor
     */
    public function hasUpdates(bool $hasUpdates = true)
    {
        $this->hasUpdates = $hasUpdates;

        return $this;
    }
}
