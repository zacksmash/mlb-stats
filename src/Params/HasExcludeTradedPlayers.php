<?php

namespace Zacksmash\MlbStats\Params;

trait HasExcludeTradedPlayers
{
    protected $excludeTradedPlayers;

    /**
     * Excludes players who have since been traded from the input team
     */
    public function excludeTradedPlayers(bool $excludeTradedPlayers = true)
    {
        $this->excludeTradedPlayers = $excludeTradedPlayers;

        return $this;
    }
}
