<?php

namespace Zacksmash\MlbStats\Params;

trait HasEndDate
{
    protected $endDate;

    /**
     * End date for range of data (must be used with start date). Format: MM/DD/YYYY
     */
    public function endDate(string $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
