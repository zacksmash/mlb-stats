<?php

namespace Zacksmash\MlbStats\Params;

trait HasSportId
{
    protected $sportId = 1;

    public function sportId(mixed $args)
    {
        $sportIds = is_array($args) ? $args : func_get_args();

        $this->sportId = implode(',', $sportIds);

        return $this;
    }
}
