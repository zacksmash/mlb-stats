<?php

namespace Zacksmash\MlbStats\Params;

trait HasIncludeChildren
{
    protected $includeChildren;

    public function includeChildren(bool $includeChildren = true)
    {
        $this->includeChildren = $includeChildren;

        return $this;
    }
}
