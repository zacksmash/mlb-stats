<?php

namespace Zacksmash\MlbStats\Params;

trait HasOffset
{
    protected $offset;

    /**
     * The pointer to start for a return set; used for pagination
     */
    public function offset(int|string $offset)
    {
        $this->offset = (string) $offset;

        return $this;
    }
}
