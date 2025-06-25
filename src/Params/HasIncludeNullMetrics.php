<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeNullMetrics
{
    protected $includeNullMetrics;

    /**
     * Show events with null metrics
     */
    public function includeNullMetrics(bool $includeNullMetrics = true)
    {
        $this->includeNullMetrics = $includeNullMetrics;

        return $this;
    }
}
