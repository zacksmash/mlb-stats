<?php

namespace Zacksmash\MlbStats\Params;

trait HasJobType
{
    protected $jobType;

    public function jobType(string $jobType)
    {
        $this->jobType = $jobType;

        return $this;
    }
}
