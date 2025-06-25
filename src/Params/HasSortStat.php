<?php

namespace Zacksmash\MlbStats\Params;

trait HasSortStat
{
    protected $sortStat;

    /**
     * Comma delimited list of baseball stats to sort splits by.
     */
    public function sortStat(mixed $args)
    {
        $sortStat = is_array($args) ? $args : func_get_args();

        $this->sortStat = implode(',', $sortStat);

        return $this;
    }
}
