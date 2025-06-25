<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StreakOrgs;

trait HasStreakOrg
{
    protected $streakOrg;

    /**
     * No Description Provided
     */
    public function streakOrg(StreakOrgs|string $streakOrg)
    {
        $this->streakOrg = $streakOrg instanceof StreakOrgs
            ? $streakOrg->value
            : $streakOrg;

        return $this;
    }

    /**
     * Set streakOrg to PLAYER
     */
    public function player()
    {
        return $this->streakOrg(StreakOrgs::PLAYER);
    }

    /**
     * Set streakOrg to TEAM
     */
    public function team()
    {
        return $this->streakOrg(StreakOrgs::TEAM);
    }

    /**
     * Set streakOrg to DIVISION
     */
    public function division()
    {
        return $this->streakOrg(StreakOrgs::DIVISION);
    }

    /**
     * Set streakOrg to LEAGUE
     */
    public function league()
    {
        return $this->streakOrg(StreakOrgs::LEAGUE);
    }

    /**
     * Set streakOrg to SPORT
     */
    public function sport()
    {
        return $this->streakOrg(StreakOrgs::SPORT);
    }

    /**
     * Set streakOrg to LEAGUE_LIST
     */
    public function leagueList()
    {
        return $this->streakOrg(StreakOrgs::LEAGUE_LIST);
    }
}
