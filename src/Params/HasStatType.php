<?php

namespace Zacksmash\MlbStats\Params;

trait HasStatType
{
    protected $statType;

    public function statType(string $statType)
    {
        $this->statType = $statType;

        return $this;
    }
}
