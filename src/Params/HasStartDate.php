<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartDate
{
    protected $startDate;

    public function startDate(string $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }
}
