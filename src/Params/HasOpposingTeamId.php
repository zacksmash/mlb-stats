<?php

namespace Zacksmash\MlbStats\Params;

trait HasOpposingTeamId
{
    protected $opposingTeamId;

    /**
     * A unique identifier for the opposing team. Must be used with Team ID
     */
    public function opposingTeamId(int|string $opposingTeamId)
    {
        $this->opposingTeamId = (string) $opposingTeamId;

        return $this;
    }
}
