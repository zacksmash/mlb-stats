<?php

namespace Zacksmash\MlbStats\Params;

trait HasVenueId
{
    protected $venueId;

    public function venueId(int|string $venueId)
    {
        $this->venueId = (string) $venueId;

        return $this;
    }
}
