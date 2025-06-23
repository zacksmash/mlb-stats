<?php

namespace Zacksmash\MlbStats\Params;

trait HasOffset
{
    protected $offset;

    public function offset(int|string $offset)
    {
        $this->offset = (string) $offset;

        return $this;
    }
}
