<?php

namespace Zacksmash\MlbStats\Params;

trait HasGamePk
{
    protected $gamePk;

    /**
     * Unique Primary Key Representing a Game
     */
    public function gamePk(int|string $gamePk)
    {
        $this->gamePk = (string) $gamePk;

        return $this;
    }
}
