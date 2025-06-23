<?php

namespace Zacksmash\MlbStats\Params;

trait HasHighlightLimit
{
    protected $highlightLimit;

    public function highlightLimit(int|string $highlightLimit)
    {
        $this->highlightLimit = (string) $highlightLimit;

        return $this;
    }
}
