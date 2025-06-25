<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeChildren
{
    protected $includeChildren;

    /**
     * Determines weather to include results from an organization's children (ex. a sport would also include results for the teams and leagues)
     */
    public function includeChildren(bool $includeChildren = true)
    {
        $this->includeChildren = $includeChildren;

        return $this;
    }
}
