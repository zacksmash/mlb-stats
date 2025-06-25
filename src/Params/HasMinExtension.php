<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinExtension
{
    protected $minExtension;

    /**
     * Minimum value to filter on
     */
    public function minExtension(float $minExtension)
    {
        $this->minExtension = (float) $minExtension;

        return $this;
    }
}
