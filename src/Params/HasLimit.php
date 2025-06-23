<?php

namespace Zacksmash\MlbStats\Params;

trait HasLimit
{
    protected $limit;

    public function limit(int|string $limit)
    {
        $this->limit = (string) $limit;

        return $this;
    }
}
