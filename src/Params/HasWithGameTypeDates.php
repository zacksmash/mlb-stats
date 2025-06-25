<?php

namespace Zacksmash\MlbStats\Params;

trait HasWithGameTypeDates
{
    protected $withGameTypeDates;

    /**
     * Retrieve dates for each game type
     */
    public function withGameTypeDates(bool $withGameTypeDates = true)
    {
        $this->withGameTypeDates = $withGameTypeDates;

        return $this;
    }
}
