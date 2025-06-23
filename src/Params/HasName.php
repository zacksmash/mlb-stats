<?php

namespace Zacksmash\MlbStats\Params;

trait HasName
{
    protected $name;

    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
