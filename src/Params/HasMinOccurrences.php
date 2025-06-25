<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinOccurrences
{
    protected $minOccurrences;

    /**
     * Minimum occurrences to filter upon
     */
    public function minOccurrences(int|string $minOccurrences)
    {
        $this->minOccurrences = (string) $minOccurrences;

        return $this;
    }
}
