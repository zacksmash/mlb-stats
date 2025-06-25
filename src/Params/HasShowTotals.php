<?php

namespace Zacksmash\MlbStats\Params;

trait HasShowTotals
{
    protected $showTotals;

    /**
     * Columns to return totals
     */
    public function showTotals(bool $showTotals = true)
    {
        $this->showTotals = $showTotals;

        return $this;
    }
}
