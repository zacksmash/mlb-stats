<?php

namespace Zacksmash\MlbStats\Params;

trait HasPersonId
{
    protected $personId;

    /**
     * Unique Player Identifier. Format: 434538, 429665, etc
     */
    public function personId(int|string $personId)
    {
        $this->personId = (string) $personId;

        return $this;
    }
}
