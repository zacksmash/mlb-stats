<?php

namespace Zacksmash\MlbStats\Params;

trait HasUsingPrivateEndpoint
{
    protected $usingPrivateEndpoint;

    /**
     * No Description Provided
     */
    public function usingPrivateEndpoint(bool $usingPrivateEndpoint = true)
    {
        $this->usingPrivateEndpoint = $usingPrivateEndpoint;

        return $this;
    }
}
