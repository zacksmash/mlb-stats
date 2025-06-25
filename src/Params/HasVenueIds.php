<?php

namespace Zacksmash\MlbStats\Params;

trait HasVenueIds
{
    protected $venueIds;

    /**
     * Comma delimited list of Unique venue identifiers
     */
    public function venueIds(mixed $args)
    {
        $venueIds = is_array($args) ? $args : func_get_args();

        $this->venueIds = implode(',', $venueIds);

        return $this;
    }
}
