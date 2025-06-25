<?php

namespace Zacksmash\MlbStats\Params;

trait HasStandingsTypes
{
    protected $standingsTypes;

    /**
     * Type of season. Available types in /api/v1/standingsTypes
     */
    public function standingsTypes(mixed $args)
    {
        $standingsTypes = is_array($args) ? $args : func_get_args();

        $this->standingsTypes = implode(',', $standingsTypes);

        return $this;
    }
}
