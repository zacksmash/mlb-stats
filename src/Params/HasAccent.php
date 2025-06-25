<?php

namespace Zacksmash\MlbStats\Params;

trait HasAccent
{
    protected $accent;

    /**
     * Boolean value to specify wanting a person's name with accents or without
     */
    public function accent(bool $accent = true)
    {
        $this->accent = $accent;

        return $this;
    }
}
