<?php

namespace Zacksmash\MlbStats\Params;

trait HasSince
{
    protected $since;

    /**
     * Returns all data that was created after the specified timestamp. Format: YYYY-MM-DDTHH:MM:SSZ
     */
    public function since(string $since)
    {
        $this->since = $since;

        return $this;
    }
}
