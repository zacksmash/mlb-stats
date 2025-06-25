<?php

namespace Zacksmash\MlbStats\Params;

trait HasStartersOnly
{
    protected $startersOnly;

    /**
     * No Description Provided
     */
    public function startersOnly(bool $startersOnly = true)
    {
        $this->startersOnly = $startersOnly;

        return $this;
    }
}
