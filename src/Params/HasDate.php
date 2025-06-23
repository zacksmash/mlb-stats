<?php

namespace Zacksmash\MlbStats\Params;

trait HasDate
{
    protected $date;

    public function date(string $date)
    {
        $this->date = $date;

        return $this;
    }
}
