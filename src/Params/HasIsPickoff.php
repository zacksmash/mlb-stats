<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsPickoff
{
    protected $isPickoff;

    public function isPickoff(bool $isPickoff = true)
    {
        $this->isPickoff = $isPickoff ? 'true' : 'false';

        return $this;
    }
}
