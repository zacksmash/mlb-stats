<?php

namespace Zacksmash\MlbStats\Params;

trait HasActiveStatus
{
    protected $activeStatus;

    public function activeStatus(string $activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }
}
