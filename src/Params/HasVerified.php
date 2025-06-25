<?php

namespace Zacksmash\MlbStats\Params;

trait HasVerified
{
    protected $verified;

    /**
     * Complete and confirmed all biographical data
     */
    public function verified(bool $verified = true)
    {
        $this->verified = $verified;

        return $this;
    }
}
