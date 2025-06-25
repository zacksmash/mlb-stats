<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\TrackingSystemOwners;

trait HasTrackingSystemOwner
{
    protected $trackingSystemOwner;

    /**
     * Owner of the tracking system
     */
    public function trackingSystemOwner(TrackingSystemOwners|string $trackingSystemOwner)
    {
        $this->trackingSystemOwner = $trackingSystemOwner instanceof TrackingSystemOwners
            ? $trackingSystemOwner->value
            : $trackingSystemOwner;

        return $this;
    }

    /**
     * Set trackingSystemOwner to UNKNOWN
     */
    public function unknown()
    {
        return $this->trackingSystemOwner(TrackingSystemOwners::UNKNOWN);
    }

    /**
     * Set trackingSystemOwner to MLB
     */
    public function mlb()
    {
        return $this->trackingSystemOwner(TrackingSystemOwners::MLB);
    }

    /**
     * Set trackingSystemOwner to MLB_CLUB
     */
    public function mlbClub()
    {
        return $this->trackingSystemOwner(TrackingSystemOwners::MLB_CLUB);
    }
}
