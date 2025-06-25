<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasOrgId;

class Award extends MlbStatsRequest
{
    use HasFields;
    use HasOrgId;

    /**
     * Unique Award Identifier. Available awards in /api/v1/awards
     */
    public function __construct(string $awardId)
    {
        $this->endpoint = "awards/$awardId";
    }
}
