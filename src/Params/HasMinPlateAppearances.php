<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinPlateAppearances
{
    protected $minPlateAppearances;

    /**
     * Minimum occurrences to filter upon
     */
    public function minPlateAppearances(int|string $minPlateAppearances)
    {
        $this->minPlateAppearances = (string) $minPlateAppearances;

        return $this;
    }
}
