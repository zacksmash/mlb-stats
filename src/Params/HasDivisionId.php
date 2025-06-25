<?php

namespace Zacksmash\MlbStats\Params;

trait HasDivisionId
{
    protected $divisionId;

    /**
     * Unique Division Identifier
     */
    public function divisionId(int|string $divisionId)
    {
        $this->divisionId = (string) $divisionId;

        return $this;
    }
}
