<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchCodes
{
    protected $pitchCodes;

    /**
     * Result of the pitch (ball, called strike, etc...)
     */
    public function pitchCodes(mixed $args)
    {
        $pitchCodes = is_array($args) ? $args : func_get_args();

        $this->pitchCodes = implode(',', $pitchCodes);

        return $this;
    }
}
