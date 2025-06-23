<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\GamePaceOrgType;

trait HasOrgType
{
    protected $orgType;

    public function orgType(GamePaceOrgType|string $orgType)
    {
        $this->orgType = $orgType instanceof GamePaceOrgType
            ? $orgType->value
            : $orgType;

        return $this;
    }

    public function orgTypeTeam()
    {
        return $this->orgType(GamePaceOrgType::TEAM);
    }

    public function orgTypeLeague()
    {
        return $this->orgType(GamePaceOrgType::LEAGUE);
    }

    public function orgTypeSport()
    {
        return $this->orgType(GamePaceOrgType::SPORT);
    }
}
