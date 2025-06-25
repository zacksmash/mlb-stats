<?php

namespace Zacksmash\MlbStats\Params;

trait HasLimit
{
    protected $limit;

    /**
     * Number of results to return
     */
    public function limit(int|string $limit)
    {
        $this->limit = (string) $limit;

        return $this;
    }
}
