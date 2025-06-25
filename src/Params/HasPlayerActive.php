<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\PlayerActives;

trait HasPlayerActive
{
    protected $playerActive;

    /**
     * No Description Provided
     */
    public function playerActive(PlayerActives|string $playerActive)
    {
        $this->playerActive = $playerActive instanceof PlayerActives
            ? $playerActive->value
            : $playerActive;

        return $this;
    }

    /**
     * Set playerActive to ACTIVE
     */
    public function active()
    {
        return $this->playerActive(PlayerActives::ACTIVE);
    }

    /**
     * Set playerActive to INACTIVE
     */
    public function inactive()
    {
        return $this->playerActive(PlayerActives::INACTIVE);
    }

    /**
     * Set playerActive to PENDING
     */
    public function pending()
    {
        return $this->playerActive(PlayerActives::PENDING);
    }

    /**
     * Set playerActive to BOTH
     */
    public function both()
    {
        return $this->playerActive(PlayerActives::BOTH);
    }
}
