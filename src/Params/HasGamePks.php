<?php

namespace Zacksmash\MlbStats\Params;

trait HasGamePks
{
    protected $gamePks;

    public function gamePks(mixed $args)
    {
        $gamePks = is_array($args) ? $args : func_get_args();

        $this->gamePks = implode(',', $gamePks);

        return $this;
    }
}
