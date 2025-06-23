<?php

namespace Zacksmash\MlbStats\Params;

trait HasRosterType
{
    protected $rosterType;

    public function rosterType(string $rosterType)
    {
        $this->rosterType = $rosterType;

        return $this;
    }
}
