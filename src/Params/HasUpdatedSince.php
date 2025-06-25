<?php

namespace Zacksmash\MlbStats\Params;

use Carbon\Carbon;

trait HasUpdatedSince
{
    protected $updatedSince;

    public function updatedSince(string|Carbon $updatedSince)
    {
        $updatedSince = $updatedSince instanceof Carbon
            ? $updatedSince
            : Carbon::parse($updatedSince);

        $this->updatedSince = $updatedSince->toIso8601String();

        return $this;
    }
}
