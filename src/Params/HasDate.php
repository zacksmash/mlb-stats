<?php

namespace Zacksmash\MlbStats\Params;

use Illuminate\Support\Carbon;

trait HasDate
{
    protected $date;

    public function date(string|Carbon $date)
    {
        $date = $date instanceof Carbon
            ? $date
            : Carbon::parse($date);

        $this->date = $date->toDateString();

        return $this;
    }
}
