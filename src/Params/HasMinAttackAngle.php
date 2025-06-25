<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinAttackAngle
{
    protected $minAttackAngle;

    /**
     * Minimum value to filter on
     */
    public function minAttackAngle(float $minAttackAngle)
    {
        $this->minAttackAngle = (float) $minAttackAngle;

        return $this;
    }
}
