<?php

namespace Zacksmash\MlbStats\Params;

trait HasCountry
{
    protected $country;

    public function country(string $country)
    {
        $this->country = $country;

        return $this;
    }
}
