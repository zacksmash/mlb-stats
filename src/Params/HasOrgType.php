<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\OrgTypes;

trait HasOrgType
{
    protected $orgType;

    /**
     * Organization level. Format: T(Team), L(League), S(Sport)
     */
    public function orgType(OrgTypes|string $orgType)
    {
        $this->orgType = $orgType instanceof OrgTypes
            ? $orgType->value
            : $orgType;

        return $this;
    }

    /**
     * Set orgType to PLAYER
     */
    public function player()
    {
        return $this->orgType(OrgTypes::PLAYER);
    }

    /**
     * Set orgType to TEAM
     */
    public function team()
    {
        return $this->orgType(OrgTypes::TEAM);
    }

    /**
     * Set orgType to DIVISION
     */
    public function division()
    {
        return $this->orgType(OrgTypes::DIVISION);
    }

    /**
     * Set orgType to LEAGUE
     */
    public function league()
    {
        return $this->orgType(OrgTypes::LEAGUE);
    }

    /**
     * Set orgType to SPORT
     */
    public function sport()
    {
        return $this->orgType(OrgTypes::SPORT);
    }

    /**
     * Set orgType to LEAGUE_LIST
     */
    public function leagueList()
    {
        return $this->orgType(OrgTypes::LEAGUE_LIST);
    }
}
