<?php

namespace Zacksmash\MlbStats\Params;

trait HasPrimaryPositions
{
    protected $primaryPositions;

    /**
     * All of the details of a player's position
     */
    public function primaryPositions(mixed $args)
    {
        $primaryPositions = is_array($args) ? $args : func_get_args();

        $this->primaryPositions = implode(',', $primaryPositions);

        return $this;
    }
}
