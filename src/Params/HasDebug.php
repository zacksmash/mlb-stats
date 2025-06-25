<?php

namespace Zacksmash\MlbStats\Params;

trait HasDebug
{
    protected $debug;

    /**
     * No Description Provided
     */
    public function debug(bool $debug = true)
    {
        $this->debug = $debug;

        return $this;
    }
}
