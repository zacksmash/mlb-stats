<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsHit
{
    protected $isHit;

    /**
     * If there was a hit ball tracked
     */
    public function isHit(bool $isHit = true)
    {
        $this->isHit = $isHit;

        return $this;
    }
}
