<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsBarrel
{
    protected $isBarrel;

    /**
     * Whether or not a play resulted in a barreled ball
     */
    public function isBarrel(bool $isBarrel = true)
    {
        $this->isBarrel = $isBarrel;

        return $this;
    }
}
