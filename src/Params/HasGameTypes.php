<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameTypes
{
    protected $gameTypes;

    public function gameTypes(mixed $args)
    {
        $gameTypes = is_array($args) ? $args : func_get_args();

        $this->gameTypes = implode(',', $gameTypes);

        return $this;
    }
}
