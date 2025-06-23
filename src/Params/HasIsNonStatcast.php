<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsNonStatcast
{
    protected $isNonStatcast;

    public function isNonStatcast(bool $isNonStatcast = true)
    {
        $this->isNonStatcast = $isNonStatcast;

        return $this;
    }
}
