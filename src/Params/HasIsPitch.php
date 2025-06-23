<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsPitch
{
    protected $isPitch;

    public function isPitch(bool $isPitch = true)
    {
        $this->isPitch = $isPitch ? 'true' : 'false';

        return $this;
    }
}
