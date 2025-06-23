<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameType
{
    protected $gameType;

    public function gameType(mixed $args)
    {
        $gameTypes = is_array($args) ? $args : func_get_args();

        $this->gameType = implode(',', $gameTypes);

        return $this;
    }
}
