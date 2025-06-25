<?php

namespace Zacksmash\MlbStats\Params;

trait HasName
{
    protected $name;

    /**
     * Filter players by the first letter of their name using using the specific character
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
