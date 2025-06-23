<?php

namespace Zacksmash\MlbStats\Params;

trait HasPlayerPool
{
    protected $playerPool;

    public function playerPool(string $playerPool)
    {
        $this->playerPool = $playerPool;

        return $this;
    }
}
