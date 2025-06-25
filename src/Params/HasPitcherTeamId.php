<?php

namespace Zacksmash\MlbStats\Params;

trait HasPitcherTeamId
{
    protected $pitcherTeamId;

    /**
     * A unique identifier for the pitcher's team
     */
    public function pitcherTeamId(mixed $args)
    {
        $pitcherTeamId = is_array($args) ? $args : func_get_args();

        $this->pitcherTeamId = implode(',', $pitcherTeamId);

        return $this;
    }
}
