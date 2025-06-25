<?php

namespace Zacksmash\MlbStats\Params;

trait HasCountry
{
    protected $country;

    /**
     * Filter players by their home country
     */
    public function country(string $country)
    {
        $this->country = $country;

        return $this;
    }
}
