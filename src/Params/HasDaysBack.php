<?php

namespace Zacksmash\MlbStats\Params;

trait HasDaysBack
{
    protected $daysBack;

    /**
     * Returns results from the last 'X' days (Starting from yesterday).
     */
    public function daysBack(int|string $daysBack)
    {
        $this->daysBack = (string) $daysBack;

        return $this;
    }
}
