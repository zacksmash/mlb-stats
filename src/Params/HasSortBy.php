<?php

namespace Zacksmash\MlbStats\Params;

trait HasSortBy
{
    protected $sortBy;

    public function sortBy(string $sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }
}
