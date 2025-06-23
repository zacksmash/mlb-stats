<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameModeId
{
    protected $gameModeId;

    public function gameModeId(int|string $gameModeId)
    {
        $this->gameModeId = (string) $gameModeId;

        return $this;
    }
}
