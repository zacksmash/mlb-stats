<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsHomeRunParks
{
    protected $isHomeRunParks;

    /**
     * No Description Provided
     */
    public function isHomeRunParks(bool $isHomeRunParks = true)
    {
        $this->isHomeRunParks = $isHomeRunParks;

        return $this;
    }
}
