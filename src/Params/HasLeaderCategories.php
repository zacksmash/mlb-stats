<?php

namespace Zacksmash\MlbStats\Params;

trait HasLeaderCategories
{
    protected $leaderCategories;

    public function leaderCategories(mixed $args)
    {
        $leaderCategories = is_array($args) ? $args : func_get_args();

        $this->leaderCategories = implode(',', $leaderCategories);

        return $this;
    }
}
