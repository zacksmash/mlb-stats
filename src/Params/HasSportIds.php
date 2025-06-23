<?php

namespace Zacksmash\MlbStats\Params;

trait HasSportIds
{
    protected $sportIds = 1;

    public function sportIds(mixed $args)
    {
        $sportIds = is_array($args) ? $args : func_get_args();

        $this->sportIds = implode(',', $sportIds);

        return $this;
    }
}
