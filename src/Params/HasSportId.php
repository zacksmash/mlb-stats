<?php

namespace Zacksmash\MlbStats\Params;

trait HasSportId
{
    protected $sportId = 1;

    /**
     * Top level organization of a sport
     */
    public function sportId(int|string $sportId)
    {
        $this->sportId = (string) $sportId;

        return $this;
    }
}
