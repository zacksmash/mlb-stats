<?php

namespace Zacksmash\MlbStats\Params;

trait HasState
{
    protected $state;

    /**
     * State where the venue is located. Format: Ohio
     */
    public function state(string $state)
    {
        $this->state = $state;

        return $this;
    }
}
