<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsHit
{
    protected $isHit;

    public function isHit(bool $isHit = true)
    {
        $this->isHit = $isHit ? 'true' : 'false';

        return $this;
    }
}
