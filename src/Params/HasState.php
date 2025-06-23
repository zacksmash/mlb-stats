<?php

namespace Zacksmash\MlbStats\Params;

trait HasState
{
    protected $state;

    public function state(string $state)
    {
        $this->state = $state;

        return $this;
    }
}
