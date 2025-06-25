<?php

namespace Zacksmash\MlbStats\Params;

trait HasUseFeaturedGame
{
    protected $useFeaturedGame;

    /**
     * No Description Provided
     */
    public function useFeaturedGame(bool $useFeaturedGame = true)
    {
        $this->useFeaturedGame = $useFeaturedGame;

        return $this;
    }
}
