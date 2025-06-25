<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsNonStatcast
{
    protected $isNonStatcast;

    /**
     * If non statcast games need to be included
     */
    public function isNonStatcast(bool $isNonStatcast = true)
    {
        $this->isNonStatcast = $isNonStatcast;

        return $this;
    }
}
