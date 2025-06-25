<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchType
{
    protected $pitchType;

    /**
     * Classification of pitch (fastball, curveball, etc...)
     */
    public function pitchType(mixed $args)
    {
        $pitchType = is_array($args) ? $args : func_get_args();

        $this->pitchType = implode(',', $pitchType);

        return $this;
    }
}
