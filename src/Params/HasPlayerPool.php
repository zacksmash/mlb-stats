<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\PlayerPools;

trait HasPlayerPool
{
    protected $playerPool;

    /**
     * Return "ALL" or only "QUALIFIED" players based on plate appearances.
     */
    public function playerPool(PlayerPools|string $playerPool)
    {
        $this->playerPool = $playerPool instanceof PlayerPools
            ? $playerPool->value
            : $playerPool;

        return $this;
    }

    /**
     * Set playerPool to ALL
     */
    public function all()
    {
        return $this->playerPool(PlayerPools::ALL);
    }

    /**
     * Set playerPool to QUALIFIED
     */
    public function qualified()
    {
        return $this->playerPool(PlayerPools::QUALIFIED);
    }

    /**
     * Set playerPool to ROOKIES
     */
    public function rookies()
    {
        return $this->playerPool(PlayerPools::ROOKIES);
    }

    /**
     * Set playerPool to QUALIFIED_ROOKIES
     */
    public function qualifiedRookies()
    {
        return $this->playerPool(PlayerPools::QUALIFIED_ROOKIES);
    }

    /**
     * Set playerPool to ORGANIZATION
     */
    public function organization()
    {
        return $this->playerPool(PlayerPools::ORGANIZATION);
    }

    /**
     * Set playerPool to ORGANIZATION_NO_MLB
     */
    public function organizationNoMlb()
    {
        return $this->playerPool(PlayerPools::ORGANIZATION_NO_MLB);
    }

    /**
     * Set playerPool to CURRENT
     */
    public function current()
    {
        return $this->playerPool(PlayerPools::CURRENT);
    }

    /**
     * Set playerPool to ALL_CURRENT
     */
    public function allCurrent()
    {
        return $this->playerPool(PlayerPools::ALL_CURRENT);
    }

    /**
     * Set playerPool to QUALIFIED_CURRENT
     */
    public function qualifiedCurrent()
    {
        return $this->playerPool(PlayerPools::QUALIFIED_CURRENT);
    }
}
