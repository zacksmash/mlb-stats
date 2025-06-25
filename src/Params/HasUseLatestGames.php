<?php

namespace Zacksmash\MlbStats\Params;

trait HasUseLatestGames
{
    protected $useLatestGames;

    /**
     * No Description Provided
     */
    public function useLatestGames(bool $useLatestGames = true)
    {
        $this->useLatestGames = $useLatestGames;

        return $this;
    }
}
