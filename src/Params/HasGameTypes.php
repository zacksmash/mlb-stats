<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameTypes
{
    protected $gameTypes;

    /**
     * Comma delimited list of type of Game. Available types in /api/v1/gameTypes
     */
    public function gameTypes(mixed $args)
    {
        $gameTypes = is_array($args) ? $args : func_get_args();

        $this->gameTypes = implode(',', $gameTypes);

        return $this;
    }
}
