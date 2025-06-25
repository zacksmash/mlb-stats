<?php

namespace Zacksmash\MlbStats\Params;

trait HasInverse
{
    protected $inverse;

    /**
     * No Description Provided
     */
    public function inverse(bool $inverse = true)
    {
        $this->inverse = $inverse;

        return $this;
    }
}
