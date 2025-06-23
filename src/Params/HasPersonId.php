<?php

namespace Zacksmash\MlbStats\Params;

trait HasPersonId
{
    protected $personId;

    public function personId(int|string $personId)
    {
        $this->personId = (string) $personId;

        return $this;
    }
}
