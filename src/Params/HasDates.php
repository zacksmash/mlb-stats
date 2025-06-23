<?php

namespace Zacksmash\MlbStats\Params;

trait HasDates
{
    protected $startDate;

    protected $endDate;

    public function startDate(string $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function endDate(string $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
