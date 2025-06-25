<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsPickoff
{
    protected $isPickoff;

    /**
     * If there was a pickoff
     */
    public function isPickoff(bool $isPickoff = true)
    {
        $this->isPickoff = $isPickoff;

        return $this;
    }
}
