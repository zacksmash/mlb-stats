<?php

namespace Zacksmash\MlbStats\Params;

trait HasTeam
{
    protected $team;

    /**
     * Unique Team Code. Format: tor, nya, etc
     */
    public function team(string $team)
    {
        $this->team = $team;

        return $this;
    }
}
