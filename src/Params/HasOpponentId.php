<?php

namespace Zacksmash\MlbStats\Params;

trait HasOpponentId
{
    protected $opponentId;

    public function opponentId(string|int $opponentId)
    {
        $this->opponentId = (string) $opponentId;

        return $this;
    }
}
