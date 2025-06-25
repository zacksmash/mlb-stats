<?php

namespace Zacksmash\MlbStats\Params;

trait HasExcludeVenueIds
{
    protected $excludeVenueIds;

    /**
     * Comma delimited list of Unique venue identifiers
     */
    public function excludeVenueIds(mixed $args)
    {
        $excludeVenueIds = is_array($args) ? $args : func_get_args();

        $this->excludeVenueIds = implode(',', $excludeVenueIds);

        return $this;
    }
}
