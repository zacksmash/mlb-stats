<?php

namespace Zacksmash\MlbStats\Params;

trait HasPositions
{
    protected $positions;

    /**
     * All of the details of a player's position
     */
    public function positions(mixed $args)
    {
        $positions = is_array($args) ? $args : func_get_args();

        $this->positions = implode(',', $positions);

        return $this;
    }
}
