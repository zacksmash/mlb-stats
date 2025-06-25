<?php

namespace Zacksmash\MlbStats\Params;

trait HasVenueId
{
    protected $venueId;

    /**
     * Unique Venue Identifier
     */
    public function venueId(int|string $venueId)
    {
        $this->venueId = (string) $venueId;

        return $this;
    }
}
