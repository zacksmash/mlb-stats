<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeMLB
{
    protected $includeMLB;

    /**
     * Determines whether to include major league teams when using the 'BY_ORGANIZATION' standings type
     */
    public function includeMLB(bool $includeMLB = true)
    {
        $this->includeMLB = $includeMLB;

        return $this;
    }
}
