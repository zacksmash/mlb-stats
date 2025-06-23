<?php

namespace Zacksmash\MlbStats\Params;

trait HasMinOccurrences
{
    protected $minOccurrences;

    public function minOccurrences(int $minOccurrences)
    {
        $this->minOccurrences = $minOccurrences;

        return $this;
    }
}
