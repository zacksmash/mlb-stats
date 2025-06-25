<?php

namespace Zacksmash\MlbStats\Params;

trait HasDrafted
{
    protected $drafted;

    /**
     * Whether or not the players been drafted
     */
    public function drafted(bool $drafted = true)
    {
        $this->drafted = $drafted;

        return $this;
    }
}
