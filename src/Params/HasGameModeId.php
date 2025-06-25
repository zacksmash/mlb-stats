<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameModeId
{
    protected $gameModeId;

    /**
     * Statcast game mode. Format: 0 = Batting Practive, 1 = Warmup 2 = Live
     */
    public function gameModeId(int|string $gameModeId)
    {
        $this->gameModeId = (string) $gameModeId;

        return $this;
    }
}
