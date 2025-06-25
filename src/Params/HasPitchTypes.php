<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchTypes
{
    protected $pitchTypes;

    /**
     * Classification of pitch (fastball, curveball, etc...)
     */
    public function pitchTypes(mixed $args)
    {
        $pitchTypes = is_array($args) ? $args : func_get_args();

        $this->pitchTypes = implode(',', $pitchTypes);

        return $this;
    }
}
