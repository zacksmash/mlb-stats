<?php

namespace Zacksmash\MlbStats\Params;

trait HasWithGameTypeDates
{
    protected $withGameTypeDates;

    public function withGameTypeDates(bool $withGameTypeDates = true)
    {
        $this->withGameTypeDates = $withGameTypeDates;

        return $this;
    }
}
