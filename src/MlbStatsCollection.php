<?php

namespace Zacksmash\MlbStats;

use Illuminate\Support\Collection;

class MlbStatsCollection extends Collection
{
    /**
     * Get a value from the collection using "dot" notation.
     */
    public function deepGet(string $key, $default = null)
    {
        return data_get($this->items, $key, $default);
    }
}
