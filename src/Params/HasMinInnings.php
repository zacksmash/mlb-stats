<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinInnings
{
    protected $minInnings;

    /**
     * Minimum occurrences to filter upon
     */
    public function minInnings(int|string $minInnings)
    {
        $this->minInnings = (string) $minInnings;

        return $this;
    }
}
