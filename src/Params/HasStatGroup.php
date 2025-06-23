<?php

namespace Zacksmash\MlbStats\Params;

trait HasStatGroup
{
    protected $statGroup;

    public function statGroup(string $statGroup)
    {
        $this->statGroup = $statGroup;

        return $this;
    }
}
