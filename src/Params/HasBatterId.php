<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterId
{
    protected $batterId;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function batterId(int|string $batterId)
    {
        $this->batterId = (string) $batterId;

        return $this;
    }
}
