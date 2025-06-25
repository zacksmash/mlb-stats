<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartDate
{
    protected $startDate;

    /**
     * Start date for range of data (must be used with end date). Format: MM/DD/YYYY
     */
    public function startDate(string $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }
}
