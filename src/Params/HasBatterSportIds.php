<?php

namespace Zacksmash\MlbStats\Params;

trait HasBatterSportIds
{
    protected $batterSportIds;

    /**
     * Comma delimited list of top level organizations of a sport
     */
    public function batterSportIds(mixed $args)
    {
        $batterSportIds = is_array($args) ? $args : func_get_args();

        $this->batterSportIds = implode(',', $batterSportIds);

        return $this;
    }
}
