<?php

namespace Zacksmash\MlbStats\Params;

trait HasSportIds
{
    protected $sportIds = 1;

    /**
     * Comma delimited list of top level organizations of a sport
     */
    public function sportIds(mixed $args)
    {
        $sportIds = is_array($args) ? $args : func_get_args();

        $this->sportIds = implode(',', $sportIds);

        return $this;
    }
}
