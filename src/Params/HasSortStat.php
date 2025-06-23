<?php

namespace Zacksmash\MlbStats\Params;

trait HasSortStat
{
    protected $sortStat;

    public function sortStat(string $sortStat)
    {
        $this->sortStat = $sortStat;

        return $this;
    }
}
