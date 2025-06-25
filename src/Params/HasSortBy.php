<?php

namespace Zacksmash\MlbStats\Params;

trait HasSortBy
{
    protected $sortBy;

    /**
     * Sort the set of data by the specified field
     */
    public function sortBy(string $sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }
}
