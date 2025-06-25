<?php

namespace Zacksmash\MlbStats\Params;

trait HasHighlightLimit
{
    protected $highlightLimit;

    /**
     * Number of results to return
     */
    public function highlightLimit(int|string $highlightLimit)
    {
        $this->highlightLimit = (string) $highlightLimit;

        return $this;
    }
}
