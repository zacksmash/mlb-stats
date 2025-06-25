<?php

namespace Zacksmash\MlbStats\Params;

trait HasRookie
{
    protected $rookie;

    /**
     * Whether or not a player is a rookie
     */
    public function rookie(bool $rookie = true)
    {
        $this->rookie = $rookie;

        return $this;
    }
}
