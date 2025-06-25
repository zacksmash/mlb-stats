<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitchNumbers
{
    protected $pitchNumbers;

    /**
     * The pitch number of a given game. Format: 1, 2, 3, etc
     */
    public function pitchNumbers(mixed $args)
    {
        $pitchNumbers = is_array($args) ? $args : func_get_args();

        $this->pitchNumbers = implode(',', $pitchNumbers);

        return $this;
    }
}
