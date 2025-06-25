<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatSide
{
    protected $batSide;

    /**
     * Bat side of hitter
     */
    public function batSide(string $batSide)
    {
        $this->batSide = $batSide;

        return $this;
    }
}
