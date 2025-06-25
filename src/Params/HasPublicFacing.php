<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\PublicFacings;

trait HasPublicFacing
{
    protected $publicFacing;

    /**
     * Return public, non-public or all games. Format: Public Facing = 'Y', Non-Public Facing = 'N', All = 'A'
     */
    public function publicFacing(PublicFacings|string $publicFacing = PublicFacings::PUBLIC_FACING)
    {
        $this->publicFacing = $publicFacing instanceof PublicFacings
            ? $publicFacing->value
            : $publicFacing;

        return $this;
    }

    /**
     * Set publicFacing to NON_PUBLIC_FACING
     */
    public function nonPublicFacing()
    {
        return $this->publicFacing(PublicFacings::NON_PUBLIC_FACING);
    }

    /**
     * Set publicFacing to ALL
     */
    public function all()
    {
        return $this->publicFacing(PublicFacings::ALL);
    }
}
