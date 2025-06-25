<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxExtension
{
    protected $maxExtension;

    /**
     * Maximum value to filter on
     */
    public function maxExtension(float $maxExtension)
    {
        $this->maxExtension = (float) $maxExtension;

        return $this;
    }
}
