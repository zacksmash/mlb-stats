<?php

namespace Zacksmash\MlbStats\Params;

trait HasEndDate
{
    protected $endDate;

    public function endDate(string $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
