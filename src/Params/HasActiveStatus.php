<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\ActiveStatuses;

trait HasActiveStatus
{
    protected $activeStatus;

    /**
     * Current status of the broadcaster. Format: Active = y, inactive = n, both = b
     */
    public function activeStatus(ActiveStatuses|string $activeStatus)
    {
        $this->activeStatus = $activeStatus instanceof ActiveStatuses
            ? $activeStatus->value
            : $activeStatus;

        return $this;
    }

    /**
     * Set activeStatus to ACTIVE
     */
    public function active()
    {
        return $this->activeStatus(ActiveStatuses::ACTIVE);
    }

    /**
     * Set activeStatus to INACTIVE
     */
    public function inactive()
    {
        return $this->activeStatus(ActiveStatuses::INACTIVE);
    }

    /**
     * Set activeStatus to BOTH
     */
    public function both()
    {
        return $this->activeStatus(ActiveStatuses::BOTH);
    }
}
