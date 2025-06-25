<?php

namespace Zacksmash\MlbStats\Params;

trait HasJobType
{
    protected $jobType;

    /**
     * Job Type Identifier (ie. UMPR, etc..)
     */
    public function jobType(string $jobType)
    {
        $this->jobType = $jobType;

        return $this;
    }
}
