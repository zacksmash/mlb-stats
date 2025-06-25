<?php

namespace Zacksmash\MlbStats\Params;

trait HasMaxAttackAngle
{
    protected $maxAttackAngle;

    /**
     * Maximum value to filter on
     */
    public function maxAttackAngle(float $maxAttackAngle)
    {
        $this->maxAttackAngle = (float) $maxAttackAngle;

        return $this;
    }
}
